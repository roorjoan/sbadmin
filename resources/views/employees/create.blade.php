@extends('layouts.app')

@section('title', 'Save')

@section('content')
    <div class="m-3">
        <h1>Register a new employee</h1>

        <form class="row g-3" action="{{ route('employees.store') }}" method="post">
            @csrf
            @include('employees.form-create')
        </form>

        <a class="btn btn-link" href="{{ route('employees.table') }}">Regresar</a>
    </div>
@endsection
