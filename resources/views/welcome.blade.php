<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Blinker:wght@700&Cinzel:wght@700&family=Open+Sans&display=swap" rel="stylesheet">
        <style>
            body{
                margin:0;
            }

            a{
                text-transform: none;
                text-decoration: none;
            }
            
            .button{
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                color:white;
                width: 150px;
            }

            .button:hover{
                opacity: 0.8;
                transition: 1s;
            }

            .logo__text{
                font-family: 'Cinzel', serif;
                line-height: 0;
                font-size: 24px;
            }
            

            .header__header-wrapper{
                justify-content: space-between;
                flex-wrap: wrap;
                display: flex;
                gap: 15px;
            }

            .header__button-a{
                color: white;
            }

            .header__user{
                font-family: "Open Sans";
            }
            
            .messages{
                background-color: rgb(237, 238, 240);
            }

            .messages__wrapper{
                display: flex;
                flex-direction: column;
                background-color: white;
                width: 50%;
                min-width: 340px;
                margin:0 auto;
            }

            .message{
                width: 200px;
            }

            .message--mine{
                align-self: end;
            }

            .message__headline{
                color:rgb(42, 88, 133);
                font-family: 'Blinker';
                font-weight: 700;
                font-size: 16.5px;
            }

            .message__time{
                color:rgb(129, 140, 153);
                font-size: 16px;
            }

            .message__text{
                font-family: 'Open Sans';
            }
        </style>
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
            </div>

        </div>
    </body>
</html>
