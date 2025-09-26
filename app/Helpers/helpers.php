<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;

if (!function_exists('createLogActivity')) {
    function createLogActivity(array $params)
    {
        $user      = Auth::user();
        $ip        = Request::ip();
        $userAgent = Request::header('User-Agent');

        \App\Models\LogActivity::create([
            'user_id'     => $user?->id,
            'status_code' => $params['statusCode'] ?? 200,
            'action'      => $params['action'] ?? '',
            'module'      => $params['module'] ?? '',
            'description' => $params['description'] ?? '',
            'ip_address'  => $ip,
            'user_agent'  => $userAgent,
            'data'        => isset($params['data']) ? json_encode($params['data']) : null
        ]);
    }
}

