<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Exports\EmployeesExport;
use App\Imports\EmployeesImport;
use Illuminate\Support\Facades\Artisan;
use Maatwebsite\Excel\Facades\Excel;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::select([
            'id',
            'name',
            'position',
            'office',
            'age',
            'created_at',
            'salary'
        ])->get();

        return view('employees.table', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'position' => ['required'],
            'office' => ['required'],
            'age' => ['required'],
            'salary' => ['required']
        ]);

        Employee::create($validated);

        return to_route('employees.table')->with('status', 'Employee created!');
    }

    public function exportExcel()
    {
        return Excel::download(new EmployeesExport, 'employees-list.xlsx');
    }

    public function importExcel(Request $request)
    {
        $request->validate([
            'file' => ['required', 'mimes:xlsx']
        ]);

        $file = $request->file('file');

        Excel::import(new EmployeesImport, $file);

        return back()->with('status', 'Employees imported successfully!');
    }

    /*public function reset()
    {
        //Artisan::call('migrate:fresh');

        //Employee::truncate();

        return to_route('employees.table')->with('status', 'OMG, All gone!');
    }*/
}
