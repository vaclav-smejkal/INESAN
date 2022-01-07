@extends('layouts.app')

@section('title', 'Přihlášení')

@section('content')
    <div class="login-content mx-auto my-5">
        <div class="container container-login px-0 bg-white shadow">
            <div class="container header-login d-flex align-items-center justify-content-between p-1 m-auto flex-wrap">
                <a class="nav-link p-0" href="#"><img src="img/logo_Inesan-cropped.png"></a>
                <h4 class="text-white mb-0 px-2">Employee Evaluation System</h4>
            </div>
            <form action="/action_page.php" class="login-form m-auto py-3 position-relative">
                <div class="my-4">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="my-4">
                    <label for="pwd">Heslo:</label>
                    <input type="password" class="form-control" id="pwd" name="pswd" required>
                </div>
                <button class="btn-forgot bg-transparent border-0 text-decoration-underline position-absolute"> <a
                        href="{{ url('forgot-password') }}">Zapomenuté heslo</a> </button>
                <div class="form-check my-4">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Zapamatovat přihlášení
                    </label>
                </div>
                <button type="submit" class="btn btn-submit mb-4 d-block m-auto w-75">Přihlásit se</button>
            </form>
        </div>
    </div>

@endsection
