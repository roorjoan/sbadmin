<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Exports\EmployeesExport;
use Maatwebsite\Excel\Facades\Excel;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.table', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        Employee::create([
            'name' => $request->name,
            'position' => $request->position,
            'office' => $request->office,
            'age' => $request->age,
            'salary' => $request->salary,
        ]);

        return to_route('employees.table')->with('status', 'Employee created!');
    }

    public function exportExcel()
    {
        return Excel::download(new EmployeesExport, 'employees-list.xlsx');
    }
}
