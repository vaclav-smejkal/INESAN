@extends('layouts.app')

@section('title', 'Zapomenuté heslo')

@section('content')
    <div class="login-content flex-grow-1">
        <div class="container container-login px-0 bg-white shadow mx-auto my-5">
            <div class="container header-login d-flex align-items-center justify-content-between p-1 m-auto flex-wrap">
                <a class="nav-link p-0" href="#"><img src="img/logo_Inesan-cropped.png"></a>
                <h4 class="text-white mb-0 px-2">Employee Evaluation System</h4>
            </div>
            <form class="m-auto py-4 w-75 forgot-form" method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="my-4">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                @error('email')
                    <span role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-footer">
                    <button type="submit" class="btn btn-submit mb-4 d-block m-auto w-75">Poslat email</button>
                </div>
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
            </form>
        </div>
    </div>
@endsection
