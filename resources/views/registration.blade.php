<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <title>Регистрация</title>
    </head>
    <body>
        <div class="container">
            <div class="registration">
                <div class="registration__wrapper">
                <h1 class="registration__headline">Регистрация</h1>
                    <form class="registration__form-registration" action="{{ route('user.registration') }}" method="POST">
                        @csrf
                        <input class="input" name="name" id="name" type="text" placeholder="Имя">
                        @error('name')
                        <p class="registration__error">{{$message}}</p>
                        @enderror
                        <input class="input" name="email" id="email" type="email" placeholder="Емайл">
                        @error('email')
                        <p class="registration__error">{{$message}}</p>
                        @enderror
                        <input class="input" name="password" id="password" type="password" placeholder="Пароль">
                        <input class="input" type="password"  id="password_confirmation" name="password_confirmation" placeholder="Подвердите пароль">
                        @error('password')
                        <p class="registration__error">{{$message}}</p>
                        @enderror
                        <button class="registration__button button" type="submit">зарегистрироваться</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>