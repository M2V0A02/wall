<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <div class="container">
            <?php
                use Illuminate\Support\Facades\Auth;

                echo Auth::id();
            ?>
            <header class="header">
                <div class="header__header-wrapper">
                    <button class="header__button--sign-up"><a href="{{ route('registration') }}">Регистрация</a></button>
                    <button class="header__button--log-in"><a href="{{ route('user.login') }}">Авторизация</a></button>
                    <button><a href="{{ route('logout') }}">Выйти</a></button>
                </div>
            </header>
        </div>
        <div class="messages">
            <div class="messages__wrapper">
                <article class="messages__message">
                    <h1 class="messages__headline-message">Егор давидов <time> 12.07.2022 </time></h1>
                    <p class="messages__text-message">Сообщение 1</p>
                </article>
            </div>
        </div>
    </body>
</html>
