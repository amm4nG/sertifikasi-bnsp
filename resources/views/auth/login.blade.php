@extends('layouts.auth')
@section('content')
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card p-4 shadow">
                    <h1 class="text-center mb-3">
                        <i class="fas fa-users-cog fa-3x text-secondary"></i>
                    </h1>
                    @if ($errors->has('message'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            {{ $errors->first('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <!-- form login -->
                    <form action="{{ route('validasi') }}" method="post">
                        @csrf
                        <!-- inputan email -->
                        <div class="form-floating mb-3">
                            <input type="email"
                                class="form-control @error('email')
                                is-invalid
                            @enderror"
                                name="email" value="{{ old('email') }}" id="floatingInput"
                                placeholder="name@example.com">
                            @error('email')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                            <label for="floatingInput">Email</label>
                        </div>
                        <!-- inputan password -->
                        <div class="form-floating">
                            <input type="password"
                                class="form-control @error('password')
                                is-invalid
                            @enderror"
                                name="password" id="floatingPassword" placeholder="Password">
                            @error('password')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                            <label for="floatingPassword">Password</label>
                        </div>
                        <!-- button login -->
                        <button type="submit" class="btn btn-primary mt-4 float-end"><i class="far fa-sign-in"></i>
                            Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
