<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;

class EmployeesExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        //recopilar los datos a exportar
        return Employee::select('id', 'name', 'position', 'office', 'age', 'created_at', 'salary')->get();
    }
}
