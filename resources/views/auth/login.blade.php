@extends('layouts.app')

@section('content')

<div class="account-page">
    <div class="container">
        <h3 class="account-title">Management Login</h3>
        <div class="account-box">
            <div class="account-wrapper">
                <div class="account-logo">
                    <a href="index.html"><img src="{{ asset('assets/img/logo2.png') }}" alt="Focus Technologies"></a>
                </div>
                 <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="form-group form-focus">
                        <label class="control-label">Username or Email</label>
                        <input id="email" type="email" class="form-control  floating @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                    @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <div class="form-group form-focus">
                        <label class="control-label">Password</label>
                        <input id="password" type="password" class="form-control floating @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                       
                    </div>
                     @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary btn-block account-btn">
                            {{ __('Login') }}
                        </button>
                    
                    </div>
                    <div class="text-center">
                         @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
