@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
            <div class="card border-primary mb-3">
            <img src= "{{asset('template/assets/img/login.png')}}" class="img-responsive center-block d-block mx-auto" style="height: 170px;width: 260px;">
            <div class="card-header text-center">{{ __('Login') }}
            </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-5 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                    
                                </button> 
                            </div>
                        </div>
                        <small class="d-block text-center mt-3">Belum punya akun? <a href="/register">Register</a></small>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
