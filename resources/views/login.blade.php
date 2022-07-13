<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <title>Авторизация</title>
    </head>
    <body>
        <div class="container">
            <div class="login">
                    <div class="login__wrapper">
                        <h1 class="login__headline">Авторизация</h1>
                        <form class="login__form-login" method="POST" action="{{ route('user.login') }}">
                            @csrf
                            <input class="input" id="name" name="name" type="text" placeholder="Имя">
                            <input class="input" id="password" name="password" type="password" placeholder="Пароль">
                            <button class="login__button button" type="submit">Войти</button>
                            @error('authError')
                                <p class="login__error">{{ $message }}</p>
                            @enderror
                        </form>
                    </div>
            </div>
    </body>
</html>