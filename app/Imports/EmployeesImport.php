<?php

namespace App\Imports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;

class EmployeesImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Employee([
            'name'       => $row[1],
            'position'   => $row[2],
            'office'     => $row[3],
            'age'        => $row[4],
            'salary'     => $row[6],
            'created_at' => $row[5]
        ]);
    }
}
