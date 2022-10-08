@extends('layouts.app')

@section('content')

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
                <form method="POST" class="login100-form" action="{{ route('login') }}">
                    
                <span class="login100-form-title pb-4">
                    {{ __('Login') }}
                </span>
                    @csrf    
                <span for="email">Email</span>
                <div class="wrap-input100">
                    <input class="input100 @error('email') is-invalid @enderror" id="email" type="email" name="email" autocomplete="off" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>             
                @enderror
                
                
                <span for="password">Password</span>
                <div class="wrap-input100">
                    <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                </div>

                <div class="flex-row d-flex justify-content-between pt-3 pb-5">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="label-checkbox100" for="remember">
                            {{('Ingatkan saya')}}
                        </label>
                    </div>
                    <div>
                        @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                    </div>
                </div>
        

                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit">
                        {{('Login')}}
                    </button>
                </div>
                <p class="pt-4 text-center" style="color: #fff;">Do you have an account ? <a class="btn btn-link" href="{{route('register')}}">Sign Up</a></p>

                <div class=" d-flex justify-content-center">
                    <a href="{{route('login.google')}}" class=" justify-content-center mx-4">
                        <i class="fab fa-google" style="font-size:40px;color:#fbbc05"></i>
                    </a>
                </div>
            </form>

            <div class="login100-more" style="background-image: url({{asset('img/3784896.jpg')}})">
            </div>
        </div>
    </div>
</div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
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

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                               
                            </div>
                            <div class="col-md-8">
                                <a class="btn btn-link" href="{{ route('register') }}">
                                    {{ __('Create an account ') }}
                                </a>
                            </div>
                            <div class="col-md-8">
                                <a class="btn btn-link" href="{{ route('login.google') }}">
                                    {{ __('Login with Google') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
