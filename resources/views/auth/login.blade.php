@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    <div class="login-area">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="login-area-field">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="login-text-field form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="login-area-field">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>


                                <input id="password" type="password" class="login-text-field form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif                          
                        </div>

                        <div class="login-area-field row-display">
                                  <div><span>Remeber me</span>   <input class="checkbox" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}></div>
                                  <button type="submit" class="login-button"> {{ __('Login') }}</button>                     
                        </div>

                        <div class="login-area-field">

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                        </div>
                    </form>
                    </div>
                    <div>img</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
