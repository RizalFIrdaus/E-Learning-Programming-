@extends('layouts.app')

@section('content')


<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
                <form method="POST" class="login100-form" action="{{ route('register') }}">
                    
                <span class="login100-form-title pb-4">
                    {{ __('Register') }}
                </span>
                    @csrf    
                <span for="name">Name</span>
                <div class="wrap-input100 mb-5">
                    <input  class="input100 py-3  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus autocomplete="off">
                @error('name')
                <span class="invalid-feedback my-4" role="alert">
                    <strong>{{ $message }}</strong>
                </span>             
            @enderror
                </div>

                <span for="email" class="my-5">Email</span>
                <div class="wrap-input100 mb-5">
                    <input id="email" type="email"  class="input100 py-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  autocomplete="off">
                    @error('email')
                    <span class="invalid-feedback my-4" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>             
                @enderror
                </div>
               
                
                
                <span for="password">Password</span>
                <div class="wrap-input100 mb-5">
                    <input id="password" type="password" class="input100 py-3 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback my-4" role="alert">
                    <strong>{{ $message }}</strong>
                </span>             
            @enderror
                </div>

                <span for="password-confirm">Password Confirm</span>
                <div class="wrap-input100 mb-5">
                    <input id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password">
                    @error('password-confirm')
                    <span class="invalid-feedback my-4" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>             
                @enderror
                </div>
                <div class="container-login100-form-btn my-5">
                    <button class="login100-form-btn" type="submit">
                        {{('Daftar')}}
                    </button>
                </div>
                <p class="pt-4 text-center" style="color: #fff;">Already have an account ?<a class="btn btn-link" href="{{route('login')}}">Login</a></p>
            </form>

            <div class="login100-more" style="background-image: url({{asset('img/20944332.jpg')}})">
            </div>
        </div>
    </div>
</div>



{{-- 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                            <div class="col-md-8">
                                <a class="btn btn-link" href="{{ route('login') }}">
                                    {{ __('Already have an account') }}
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
