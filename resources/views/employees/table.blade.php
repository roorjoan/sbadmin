@extends('layouts.app')

@section('title', 'Table')

@section('content')

    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Data</h3>

        <!--Reporte excel-->
        <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="{{ route('employees.excel') }}"><i
                class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a>
    </div>

    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Employee Info</p>
        </div>
        <div class="card-body">

            <!--Tabla employees-->
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="miDataTable">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->id }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->position }}</td>
                                <td>{{ $employee->office }}</td>
                                <td>{{ $employee->age }}</td>
                                <td>{{ $employee->created_at }}</td>
                                <td>${{ $employee->salary }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
