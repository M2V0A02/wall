<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Стена</title>
        <link href="https://fonts.googleapis.com/css2?family=Blinker:wght@700&Cinzel:wght@700&family=Open+Sans&display=swap" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <?php
                use Illuminate\Support\Facades\Auth;
                use App\Models\Message;   
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
                        <button class="header__button--sign-up button"><a class="header__button-a" href="{{ route('user.registration') }}">Регистрация</a></button>
                        <button class="header__button--login button"><a class="header__button-a" href="{{ route('user.login') }}">Авторизация</a></button>
                        <button class="header__button--logout button"><a class="header__button-a" href="{{ route('user.logout') }}">Выйти</a></button>
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
                        @foreach ($allMessages as $message)
                            @if ($message->user_id == Auth::id())
                                <article class="message message--mine">
                            @endif
                                    <h1 class="message__headline">{{Message::find($message->id)->user->name}}
                                        <?php if(($message->user_id == Auth::id()) and (date_diff(new DateTime(), new DateTime($message->created_at))->days == 0)){?>
                                            <form class="message__delete-form" action="{{ route('comment.delete') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" id="id" value="{{$message->id}} ">
                                                <button class="message__delete-button" type="submit">
                                                    <img class="message__red-cross" src="{{  asset('img/red-cross.svg')  }}">
                                                </button>
                                            </form>
                                        <?php }; ?>
                                    </h1>
                                    <time class="message__time"> 
                                        {{$message->created_at}}
                                    </time>
                                    <p class="message__text">{{$message->message}}</p>
                                </article>
                        @endforeach
                    </div>
                    @if (Auth::check())
                        <div class="send-message">
                            <div class="send-message__wrapper">
                                <form action="{{ route('comment.create') }}" class="send-message__form" method="POST">
                                    @csrf
                                    <input class="send-message__input" name="message" id="message" type="text"  placeholder="Оставить сообщение...">
                                    <button type="submit" class="send-message__button">
                                        <img class="send-message__button-img" src="{{ asset('img/right-arrow.png') }}" alt="">
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endif
                    
                    {{ $allMessages->links('paginate') }}
                </div>
            </div> 
        </div>
    </body>
    <script type="text/javascript" src="{{ asset('js/main.js') }}" defer>
    </script>
</html>
