<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>
    </head>
    <body>
        <div class="container">
            <form class="" method="POST" action="{{ route('user.login') }}">
                @csrf
                <input id="name" name="name" type="text">
                <input id="password" name="password" type="password">
                <button type="submit">Войти</button>
            </form>
    </body>
</html>