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
            <form action="{{ route('registration') }}" method="POST">
                @csrf
                <input name="name" id="name" type="text">
                <input name="email" id="email" type="email">
                <input name="password" id="password" type="password">
                <button type="submit">Войти</button>
            </form>
        </div>
    </body>
</html>