@extends('layouts.main')
@section('container')
    <main class="form-signin w-100 m-auto">
        <form action="/Login" method="POST">
            @csrf
            <div class="container col-xl-10 col-xxl-8 px-4 py-5">
                <div class="row flex-lg-row align-items-center g-lg-5 py-5">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session()->has('LoginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('LoginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <h1 class="text-center fs-3 fw-bold text-dark">Login Form</h1>
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="{{ asset('img/bootstrap-themes.png') }}" class="d-block mx-lg-auto img-fluid"
                            alt="imgLogin" width="700" height="500" loading="lazy">
                    </div>
                    <div class="col-md-10 mx-auto col-lg-5">
                        <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control @error('email')
                                    is-invalid
                                @enderror" id="email" name="email"
                                    placeholder="name@example.com" required autofocus>
                                <label for="floatingInput">Email address</label>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password" required>
                                <label for="password">Password</label>
                            </div>
                            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
                            <hr class="my-4">
                            <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
                        </form>
                    </div>
                </div>
            </div>
        </form>
    </main>
@endsection
