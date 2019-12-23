@extends('layouts.signUp')

@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-5">

                <form method="POST" class="login100-form validate-form" action="{{ route('login') }}">
                    @csrf
                    <span class="login100-form-title">
						Staff's Login
					</span>

                    <div class="form-group">
                        <label for="email" class="col-sm-12 col-form-label text-md-left">E-Mail Address</label>

                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif

                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-12 col-form-label text-md-left">Password</label>

                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">

                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                    </div>

                    <div class="text-center pt-2">

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

@endsection

