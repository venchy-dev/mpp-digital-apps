<?php

namespace App\Exports;

use App\Models\LogActivity;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Carbon\Carbon;

class LogActivityExport implements 
    FromCollection,
    WithHeadings,
    WithMapping, 
    WithStyles, 
    ShouldAutoSize
{
    private $rowNumber = 1; // Initialize the row number
    private $filters;

    public function __construct(Request $request)
    {
        // Ambil parameter dari body request
        $this->filters = $request->only(['duration', 'status_code', 'action', 'module']);
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $query = LogActivity::query();

        // Terapkan filter jika parameter tersedia
        if (!empty($this->filters['duration'])) {
            $query->where('created_at', '>=', Carbon::now()->subHours($duration));
        }

        if (!empty($this->filters['status_code'])) {
            if ($status_code == 'success') {
                $query->where('status_code', 200);
            } else if ($status_code == 'error') {
                $query->where('status_code', '!=', 200);
            } else {}
        }

        if (!empty($this->filters['action'])) {
            $query->where('action', $action);
        }

        if (!empty($this->filters['module'])) {
            $query->where('module', $module);
        }

        return $query->get();
    }

    public function headings(): array
    {
        return [
            '#',
            'Status Code',
            'Action',
            'Module',
            'IP Address',
            'User Agent',
            'Description',
            'Time'
        ];
    }

    public function map($log_activity): array
    {
        $time = \Carbon\Carbon::parse($log_activity->created_at)->format('d/M/Y H:i');

        return [
            $this->rowNumber++, // Auto-incremented row number
            $this->formatAsString($log_activity->status_code),
            $log_activity->action,
            $log_activity->module,
            $this->formatAsString($log_activity->ip_address),
            $log_activity->user_agent,
            $log_activity->description,
            $time
        ];
    }

    private function formatAsString($value)
    {
        return " ".$value;
    }
}
