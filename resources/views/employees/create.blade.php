@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="m-3">
        <h1>Register a new employee</h1><br>

        @include('employees.form-create')

        <a class="btn btn-link" href="{{ route('employees.table') }}">Regresar</a>
    </div>
@endsection
