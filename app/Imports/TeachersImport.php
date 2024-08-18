<?php

namespace App\Imports;

use App\Models\Teacher;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TeachersImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Teacher([
            'first_name' => $row['first_name'],
            'last_name' => $row['last_name'],
            'career' => $row['career'],
// Add other fields as necessary
        ]);
    }
}