@extends('layouts.auth')

@section('title', 'Login')

@section('auth_content')
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-12 col-xl-10">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-flex">
                            <div class="flex-grow-1 bg-login-image"
                                style="background-image: url({{ asset('img/dogs/image3.jpeg') }});"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="text-dark mb-4">Welcome Back!</h4>
                                </div>
                                <form class="user" action="{{ route('login') }}" method="POST">
                                    @csrf

                                    <div class="mb-3">
                                        <input class="form-control form-control-user" type="email" id="exampleInputEmail"
                                            aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email"
                                            value="{{ old('email', 'admin@email.com') }}" autofocus>
                                        @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control form-control-user" type="password"
                                            id="exampleInputPassword" placeholder="Password" name="password"
                                            value="Admin123">
                                        @error('password')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div class="custom-control custom-checkbox small">
                                            <div class="form-check">
                                                <input class="form-check-input custom-control-input" type="checkbox"
                                                    id="formCheck-1" name="remember">
                                                <label class="form-check-label custom-control-label" for="formCheck-1">
                                                    Remember Me
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary d-block btn-user w-100" type="submit">Login</button>
                                    <hr>
                                </form>
                                <div class="text-center">
                                    <a class="small" href="{{ route('forgot') }}">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{ route('register') }}">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
