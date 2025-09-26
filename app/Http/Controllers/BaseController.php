<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Auth;
use DB;

use App\Models\User;
use App\Models\UserPreference;

class BaseController extends Controller
{
    public function login() {
        return view('admin.auth.login');
    }

    public function authenticate(Request $request) {
        // Input data validation
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Get user login detail by email
        $user = User::where('email', $request->email)->first();
        if (is_null($user)) {
            return redirect()->route('login')->withInput()->with(
                'login_error', '<b>User not found</b><br>Please check the information and try again.'
            );
        }

        // User data check
        if (Auth::attempt($credentials)) {
            // Check first if user account is active or not
            if ($user->preferences->is_active == false) {
                return redirect()->route('login')->withInput()->with(
                    'login_error', '<b>This user account is inactive</b><br>Please contact the administrator to activate it.'
                );
            }

            // Session generate to anticipate session fixation
            $request->session()->regenerate();
            
            // Create user log activity
            createLogActivity([
                'action'      => 'Login',
                'module'      => 'Authentication',
                'description' => Auth::user()->name . ' melakukan login ke aplikasi',
                'statusCode'  => 200,
                'data'        => [
                    'user_id' => Auth::user()->id,
                    'changed' => ['name' => Auth::user()->name]
                ]
            ]);

            // Redirect to dashboard
            return redirect()->route('dashboard')->with('success', 'Login successfully.');
        }

        // Create user log activity
        createLogActivity([
            'action'      => 'Login',
            'module'      => 'Authentication',
            'description' => 'User dengan email : ' . $request->email . ' gagal melakukan login ke aplikasi',
            'statusCode'  => 401
        ]);

        // If failed, redirect to login form with error message
        return redirect()->route('login')->withInput()->with(
            'login_error', '<b>Incorrect Email or Password</b><br>Please try again or reset your password if you have forgotten it.'
        );
    }

    public function logout(Request $request)
    {
        // Create user log activity
        createLogActivity([
            'action'      => 'Logout',
            'module'      => 'Authentication',
            'description' => Auth::user()->name . ' logout dari aplikasi',
            'statusCode'  => 200,
            'data'        => [
                'user_id' => Auth::user()->id,
                'changed' => ['name' => Auth::user()->name]
            ]
        ]);

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function register() {
        return view('admin.auth.register');
    }

    public function registerPost(Request $request)
    {
        // Input data validation
        $request->validate([
            'name'             => 'required',
            'email'            => 'required|email|unique:users,email',
            'password'         => 'required|min:6',
            'password_confirm' => 'required|same:password'
        ]);

        DB::beginTransaction();

        try {
            $data = $request->except('password_confirm');
            $data['password'] = Hash::make($request->password);

            $user = User::create($data);

            UserPreference::create([
                'user_id' => $user->id,
                'role'    => "operator",
            ]);

            // A function use to send an email to administrator for activation
            \Mail::to(env('MAIL_USERNAME'))->send(new \App\Mail\NewUserRegistrationMail($user));

            DB::commit();

            return redirect()->route('register')->with(
                'registration_success', '<b>User Registration Success</b><br>Please wait for an activation email from the administrator before using your account.'
            );
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('register')->withInput()->with(
                'registration_error', '<b>Something Error</b><br>' . $e->getMessage()
            );
        }
    }

    public function resetPassword() {
        return view('admin.auth.reset_password');
    }

    public function resetPasswordConfirm(Request $request) {
        // Get user data target
        $user  = User::where('email', $request->email)->first();
        if (is_null($user)) {
            return redirect()->route('reset-password')->withInput()->with(
                'reset_password_error', '<b>User not found</b><br>Please check the information and try again.'
            );
        }

        // Preapare the reset password attribute
        $token = Password::createToken($user);
        $url   = url("/change-password/{$token}?email=" . urlencode($user->email));

        // A function use to send an email to administrator for activation
        \Mail::to($user->email)->send(new \App\Mail\ResetPasswordMail($user, $url));

        return redirect()->route('reset-password')->withInput()->with(
            'reset_password', '<b>Reset Password Confirm</b><br>Please check your email to get reset password link.'
        );
    }

    public function changePasswordForm(Request $request) {
        $email = urldecode($request->query('email'));
        return view('admin.auth.new_password', compact('email'));
    }

    public function changePassword(Request $request) {
        // Input data validation
        $request->validate([
            'email'            => 'required|email',
            'password'         => 'required|min:6',
            'password_confirm' => 'required|same:password'
        ]);

        DB::beginTransaction();
        try {
            // Function to update user activation status
            User::where('email', $request->email)
                ->update([
                    'password' => Hash::make($request->password),
                ]);

            DB::commit();
            return redirect()->back()->with(
                'change_password', '<b>Reset Password Successful</b><br>Please try to sign in again.'
            );
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('login')->withInput()->with(
                'change_password_error', '<b>Something Error</b><br>' . $e->getMessage()
            );
        }
    }
    
    public function dashboard() {
        return view('admin.dashboard.index');
    }

    public function sample_360() {
        return view('admin.sample-page.360_layout_test');
    }

    public function test_404() {
        return view('error-page.not_found');
    }
}
