
@extends('layouts.app')

@section('title','Register')

@section('styles')
<link rel="stylesheet" href="{{ mix('/css/register.css') }}">
<style>

    #firstname::placeholder,
    #lastname::placeholder,
    #username::placeholder,
    #email::placeholder,
    #password::placeholder,
    #password-confirm::placeholder {

        opacity: 0.3;
    }

     #password::placeholder {
        font-family: "FontAwesome";
        content: "\f023";           /* ICON lock*/
        opacity: 0.15;
    }

    #password-confirm::placeholder {
        font-family: "FontAwesome";
        content: "\f023";           /* ICON lock*/
        opacity: 0.15;
    }

    .use_icon {
	    font-family: FontAwesome;  /* F.A */
    }

    body {
        margin: 0;
        padding: 0;
        background-color: #99ccff;
    }

    .btn-color-change {
        background-color: #003366;
    }

    .card {
        margin-top: 0;
    }

    .banto-img {
        max-width: 100%;
    }

</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card rounded-3">
                <div class="row">
                    <div class="col-2 logo-section">
                        <img src="{{ asset('storage/images/banto.png') }}" alt="Responsive image of cat" class="img-fluid banto-img">
                    </div>
                    <div class="col-8">
                        <h1 class="text-center fw-bold mb-3 mt-5">Create New Account</h1>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <label for="name" class="text-muted col-md-4 col-form-label">{{ __('NAME') }}</label>
                                <input id="name" type="text" class="form-control text-center @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="ENTER YOUR NAME">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-6">
                                <label for="username" class="text-muted col-md-4 col-form-label">{{ __('USER NAME') }}</label>
                                <input id="username" type="text" class="form-control text-center @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username" autofocus placeholder="ENTER YOUR USER NAME">
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="email" class="text-muted col-md-4 col-form-label">{{ __('EMAIL') }}</label>
                                <input id="email" type="email" class="form-control text-center @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="ENTER EMAIL">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-6 enterpass">
                                <label for="password" class="text-muted col-md-4 col-form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control text-center use_icon @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="&#xf023; &nbsp ENTER PASSWORD">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="password-confirm" class="text-muted col-form-label">{{ __('CONFIRM PASSWORD') }}</label>
                                <input id="password-confirm" type="password" class="form-control fw-light text-center use_icon" name="password_confirmation" autocomplete="new-password" placeholder="&#xf023; &nbsp;CONFIRM PASSWORD">
                            </div>
                        </div>
                        <div class="row col-6 mt-5 mb-5 mx-auto">
                            <button type="submit" class="btn btn-lg btn-primary fw-bold btn-color-change">
                                {{ __('REGISTER') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
