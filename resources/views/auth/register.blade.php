@extends('layouts.auth')

@section('title', 'Register')

@section('auth_content')
    <div class="card shadow-lg o-hidden border-0 my-5">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg-5 d-none d-lg-flex">
                    <div class="flex-grow-1 bg-register-image"
                        style="background-image: url({{ asset('img/dogs/image2.jpeg') }});"></div>
                </div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h4 class="text-dark mb-4">Create an Account!</h4>
                        </div>

                        <form class="user" action="{{ route('register') }}" method="POST">
                            @csrf

                            <div class="row mb-3">

                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="form-control form-control-user" type="text" id="exampleFirstName"
                                        placeholder="First Name" name="name" value="{{ old('name') }}" autofocus>
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <input class="form-control form-control-user" type="text" id="exampleFirstName"
                                        placeholder="Last Name" name="last_name" value="{{ old('last_name') }}">
                                    @error('last_name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>

                            <div class="mb-3">
                                <input class="form-control form-control-user" type="email" id="exampleInputEmail"
                                    aria-describedby="emailHelp" placeholder="Email Address" name="email"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="row mb-3">

                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input class="form-control form-control-user" type="password" id="examplePasswordInput"
                                        placeholder="Password" name="password">
                                    @error('password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-sm-6"><input class="form-control form-control-user" type="password"
                                        id="exampleRepeatPasswordInput" placeholder="Repeat Password"
                                        name="password_confirmation">
                                </div>

                            </div>

                            <button class="btn btn-primary d-block btn-user w-100" type="submit">Register Account</button>
                            <hr>

                        </form>
                        <div class="text-center">
                            <a class="small" href="{{ route('forgot') }}">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
