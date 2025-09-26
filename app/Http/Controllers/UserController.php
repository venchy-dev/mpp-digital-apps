<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use DB;

use App\Models\User;
use App\Models\UserPreference;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Condition to check the request is filter or not
        if (count(request()->query()) > 0) {
            $role      = $request->query('role');
            $is_active = $request->query('is_active');
            $keyword   = $request->query('keyword');

            // Initialize query
            $users = User::select('users.*', 'user_preferences.role', 'user_preferences.is_active')
                            ->leftJoin('user_preferences', 'users.id', 'user_preferences.user_id');

            // Filter by user role if provided
            if (!empty($role)) {
                $users->where('user_preferences.role', $role);
            }

            // Filter by user status if provided
            if (!empty($is_active)) {
                $users->where('user_preferences.is_active', $is_active == 'active' ? true : false);
            }

            if (!empty($keyword)) {
                $users->where(function ($query) use ($keyword) {
                    $query->where('users.name', 'like', "%{$keyword}%")
                        ->orWhere('users.email', 'like', "%{$keyword}%");
                });
            }

            $users = $users->latest()
                            ->paginate(10) // Using paginate to get paginated results
                            ->appends($request->query()); // Append filters to pagination links
        } else {
            $users = User::latest()->paginate(10);
        }

        return view('admin.configuration.user-management.index', compact('users'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.configuration.user-management.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'             => 'required',
            'email'            => 'required|email|unique:users,email',
            'password'         => 'required|min:6',
            'password_confirm' => 'required|same:password',
            'role'             => 'required|in:admin,operator'
        ]);

        DB::beginTransaction();

        try {
            $data = $request->except('password_confirm');
            $data['password'] = Hash::make($request->password);

            $user = User::create($data);

            UserPreference::create([
                'user_id' => $user->id,
                'role'    => $request->role,
            ]);

            DB::commit();

            return redirect()->route('user-management.index')->with('insert', 'Data created successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Something Error ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.configuration.user-management.update', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'             => 'required',
            'email'            => 'required|email|unique:users,email,' . $user->id,
            'password'         => 'nullable|min:6',
            'password_confirm' => 'same:password|nullable',
            'role'             => 'required',
        ]);

        // Update basic info
        $user->name  = $request->name;
        $user->email = $request->email;

        // Only update password if there's in request
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        // Update role in UserPreference
        UserPreference::updateOrCreate(
            ['user_id' => $user->id],
            ['role' => $request->role]
        );

        return redirect()->route('user-management.index')->with('update', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user-management.index')->with('delete', 'Data deleted successfully');
    }

    public function userActivation(Request $request)
    {
        // Get user data target
        $user = User::where('id', $request->user_id)->first();

        // Function to update user activation status
        UserPreference::where('user_id', $request->user_id)
                        ->update([
                            'is_active' => $request->is_active,
                        ]);

        // A function use to send an email to administrator for activation
        \Mail::to($user->email)->send(new \App\Mail\UserActivationMail($user, $request->is_active ? 'Activated' : 'Deactivated'));

        return redirect()->route('user-management.index')->with('update', 'Data updated successfully');
    }
}
