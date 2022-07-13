<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Blinker:wght@700&Cinzel:wght@700&family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <?php
                use Illuminate\Support\Facades\Auth;
                
        ?>
    </head>
    <body>
        <div class="container">
            <header class="header">
                <div class="header__header-wrapper">
                    <div class="logo">
                        <p class="logo__text">WALL</p>
                    </div>
                    <div class="header__buttons-wrapper">
                        <button class="header__button--sign-up button"><a class="header__button-a" href="{{ route('registration') }}">Регистрация</a></button>
                        <button class="header__button--login button"><a class="header__button-a" href="{{ route('user.login') }}">Авторизация</a></button>
                        <button class="header__button--logout button"><a class="header__button-a" href="{{ route('logout') }}">Выйти</a></button>
                        <span class="header__user">
                            <?php
                                if (Auth::check())
                                {
                                   echo Auth::user()->name;
                                }
                            ?>
                        </span>
                    </div>
                </div>
            </header>
            <div class="messages">
                <div class="messages__wrapper">
                    <div class="messages__content">
                        <article class="message message--mine">
                            <h1 class="message__headline">Егор давидов <time class="message__time"> 12.07.2022 15:33 </time></h1>
                            <p class="message__text">Сообщение 1234</p>
                        </article>
                        <article class="message message--mine">
                            <h1 class="message__headline">Егор давидов <time class="message__time"> 12.07.2022 </time></h1>
                            <p class="message__text">Сообщение 1</p>
                        </article>
                        <article class="message">
                            <h1 class="message__headline">Егор давидов <time class="message__time"> 12.07.2022 </time></h1>
                            <p class="message__text">Сообщение 1</p>
                        </article>
                        <article class="message">
                            <h1 class="message__headline">Егор давидов <time class="message__time"> 12.07.2022 </time></h1>
                            <p class="message__text">Сообщение 1</p>
                        </article>
                        <article class="message">
                            <h1 class="message__headline">Егор давидов <time class="message__time"> 12.07.2022 </time></h1>
                            <p class="message__text">Сообщение 1</p>
                        </article>
                        <article class="message">
                            <h1 class="message__headline">Егор давидов <time class="message__time"> 12.07.2022 </time></h1>
                            <p class="message__text">Сообщение 1</p>
                        </article>
                        <article class="message">
                            <h1 class="message__headline">Егор давидов <time class="message__time"> 12.07.2022 </time></h1>
                            <p class="message__text">Сообщение 1</p>
                        </article>
                        <article class="message">
                            <h1 class="message__headline">Егор давидов <time class="message__time"> 12.07.2022 </time></h1>
                            <p class="message__text">Сообщение 1</p>
                        </article>
                        <article class="message message--mine">
                            <h1 class="message__headline">Егор давидов <time class="message__time"> 12.07.2022 15:33 </time></h1>
                            <p class="message__text">Сообщение 1234</p>
                        </article>
                        <article class="message message--mine">
                            <h1 class="message__headline">Егор давидов <time class="message__time"> 12.07.2022 </time></h1>
                            <p class="message__text">Сообщение 1</p>
                        </article>
                        <article class="message">
                            <h1 class="message__headline">Егор давидов <time class="message__time"> 12.07.2022 </time></h1>
                            <p class="message__text">Сообщение 1</p>
                        </article>
                        <article class="message">
                            <h1 class="message__headline">Егор давидов <time class="message__time"> 12.07.2022 </time></h1>
                            <p class="message__text">Сообщение 1</p>
                        </article>
                        <article class="message">
                            <h1 class="message__headline">Егор давидов <time class="message__time"> 12.07.2022 </time></h1>
                            <p class="message__text">Сообщение 1</p>
                        </article>
                        <article class="message">
                            <h1 class="message__headline">Егор давидов <time class="message__time"> 12.07.2022 </time></h1>
                            <p class="message__text">Сообщение 1</p>
                        </article>
                        <article class="message">
                            <h1 class="message__headline">Егор давидов <time class="message__time"> 12.07.2022 </time></h1>
                            <p class="message__text">Сообщение 1</p>
                        </article>
                        <article class="message">
                            <h1 class="message__headline">Егор давидов <time class="message__time"> 12.07.2022 </time></h1>
                            <p class="message__text">Сообщение 1</p>
                        </article>
                    </div>
                    <div class="send-message">
                        <div class="send-message__wrapper">
                            <form action="" class="send-message__form">
                                <input class="send-message__input" name="message" id="message" type="text"  placeholder="Оставить сообщение...">
                                <button type="submit" class="send-message__button">
                                    <img class="send-message__button-img" src="{{ asset('img/right-arrow.png') }}" alt="">
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="{{ asset('js/main.js') }}" defer>
    </script>
</html>
