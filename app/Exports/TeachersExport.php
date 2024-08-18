<?php
namespace App\Exports;

use App\Models\Teacher;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TeachersExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Teacher::all();
    }

    public function headings(): array
{
    return [
        'ID',
        'First Name',
        'Last Name',
        'Career',
        'Academic Tutoring Hours',
        'Thesis Tutoring Hours',
        'Individual Tutoring Hours',
        'Group Tutoring Hours',
        'Complex Thesis Tutoring Hours',
        'Community Practice Tutoring Hours',
        'Distributive Hours',
        'Utah Hours',
        'Academic Hours',
        'Managements',
    ];
}
}