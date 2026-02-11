<?php

namespace App\Exports;

use App\Models\Verification;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class VerificationsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Verification::select(
            'date',
            'appt_id',
            'details',
            'insurance',
            'plan',
            'status',
            'action',
            'comments'
        )->get();
    }

    public function headings(): array
    {
        return [
            'Date',
            'Appointment ID',
            'Details',
            'Insurance',
            'Plan',
            'Status',
            'Action',
            'Comments',
        ];
    }
}
