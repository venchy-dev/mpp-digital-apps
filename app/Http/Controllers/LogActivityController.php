<?php

namespace App\Http\Controllers;

use App\Models\LogActivity;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class LogActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Get list value for filter
        $filter_value = [
            'actions' => LogActivity::select('action')->distinct()->orderBy('id', 'desc')->pluck('action')->toArray(),
            'modules' => LogActivity::select('module')->distinct()->orderBy('id', 'desc')->pluck('module')->toArray(),
        ];

        // Get query from param
        $duration    = $request->query('duration');
        $status_code = $request->query('status_code');
        $action      = $request->query('action');
        $module      = $request->query('module');

        // Initialize query
        $activities = LogActivity::select('*');

        // Condition to check the request is filter or not
        if (count(request()->query()) > 0) {
            if (!empty($duration)) {
                $activities->where('created_at', '>=', Carbon::now()->subHours($duration));
            }

            if (!empty($status_code)) {
                if ($status_code == 'success') {
                    $activities->where('status_code', 200);
                } else if ($status_code == 'error') {
                    $activities->where('status_code', '!=', 200);
                } else {}
            }

            if (!empty($action)) {
                $activities->where('action', $action);
            }

            if (!empty($module)) {
                $activities->where('module', $module);
            }

            $activities = $activities->latest()
                                    ->paginate(10) // Using paginate to get paginated results
                                    ->appends($request->query()); // Append filters to pagination links
        } else {
            $activities = LogActivity::latest()->paginate(10);
        }

        return view('admin.configuration.log-activity.index', compact('activities', 'filter_value'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function export(Request $request)
    {
        dd($request);
        // return Excel::download(new LogActivityExport, 'log_activity.xlsx'); // Ekspor ke file Excel
        return;
    }

    // ==================================================================================================================== //
    //                                                 ** UNUSED FUNCTION **                                                //
    // ==================================================================================================================== //

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(LogActivity $logActivity)
    {
        //
    }

    public function edit(LogActivity $logActivity)
    {
        //
    }

    public function update(Request $request, LogActivity $logActivity)
    {
        //
    }

    public function destroy(LogActivity $logActivity)
    {
        //
    }
}
