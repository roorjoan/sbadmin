@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <h3 class="text-dark mb-4">Profile</h3>

    <form action="{{ route('users.update', Auth::user()->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="row mb-3">

            <!--Foto-->
            <div class="col-lg-4">
                <div class="card mb-3">
                    <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4"
                            src="{{ asset('img/dogs/image2.jpeg') }}" width="160" height="160">
                        <div class="mb-3">
                            <button class="btn btn-primary btn-sm" type="button">Change Photo</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="row">
                    <div class="col">

                        <!--User Settings Form-->
                        <div class="card shadow mb-3">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 fw-bold">User Settings</p>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="email"><strong>Email
                                                    Address</strong></label>
                                            <input class="form-control" type="email" id="email" name="email"
                                                value="{{ old('email', Auth::user()->email) }}">
                                            @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label"
                                                for="username"><strong>Password</strong></label>
                                            <input class="form-control" type="password" id="password"
                                                placeholder="********" name="password">
                                            @error('password')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="first_name"><strong>First
                                                    Name</strong></label><input class="form-control" type="text"
                                                id="name" name="name" value="{{ old('name', Auth::user()->name) }}">
                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="last_name"><strong>Last
                                                    Name</strong></label>
                                            <input class="form-control" type="text" id="last_name" name="last_name"
                                                value="{{ old('last_name', Auth::user()->last_name) }}">
                                            @error('last_name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Contact settings-->
                        <div class="card shadow">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 fw-bold">Contact Settings</p>
                            </div>
                            <div class="card-body">

                                <div class="mb-3"><label class="form-label"
                                        for="address"><strong>Address</strong></label>
                                    <input class="form-control" type="text" id="address" placeholder="Sunset Blvd, 38"
                                        name="address">
                                    @error('address')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="row">

                                    <div class="col">
                                        <div class="mb-3"><label class="form-label"
                                                for="city"><strong>City</strong></label>
                                            <input class="form-control" type="text" id="city"
                                                placeholder="Los Angeles" name="city">
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="mb-3"><label class="form-label"
                                                for="country"><strong>Country</strong></label><input class="form-control"
                                                type="text" id="country" placeholder="USA" name="country"></div>
                                    </div>

                                </div>

                                <div class="mb-3">
                                    <button class="btn btn-primary btn-sm" type="submit">Save Settings</button>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </form>
@endsection
