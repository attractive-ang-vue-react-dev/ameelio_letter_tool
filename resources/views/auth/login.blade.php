@extends('layouts.main')

@section('content')
    <div class="logo">
        <img src="/logo.png">
    </div>
    <h1 class="sub-logo">Letters</h1>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="login-form">
                <div class="form-header col-sm-12" style="text-align:center;">
                    <img src="/login-user-icon.png" style="width: 25%; padding: 10px;">
                </div>
                <div class="col-md-12 form-container">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-Mail address">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-sm btn-primary" style="width: 100%;">
                                    {{ __('Login') }}
                                </button>
                                <a class="btn btn-sm btn-danger" style="width: 100%;"href="/register">Register</a>

                            </div>
                            <div class="col-md-12">
                                @if (Route::has('password.request'))
                                    <a class=" btn-link" href="{{ route('password.request') }}" style="float: right;">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>

                            <div class="col-md-12">
                                <a class="btn btn-sm btn-primary"style="width: 100%;background-color: white; color: black;"href="/">
                                <img src="google.svg" style="width:8%;">
                                Sign Up with Google</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
