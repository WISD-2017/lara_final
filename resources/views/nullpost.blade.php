<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Talk</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .btn-su {
                color: #fff;
                background-color: #57a2f8;
                border-color: #57a2f8;
            }
            .btn{
                position: relative;
                left:%;
                display: inline-block;
                margin-bottom: 0;
                font-weight: 400;
                text-align: center;
                vertical-align: middle;
                touch-action: manipulation;
                cursor: pointer;
                border: 1px solid transparent;
                white-space: nowrap;
                padding: 6px 12px;
                font-size: 40px;
                line-height: 1.6;
                border-radius: 4px;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    沒有東西喔 8 8
                </div>
                <div class="title m-b-md">
                       
                    @guest
                       <p clss="fontsmall">登入後才可發文</p>
                       <a href="{{ route('login') }}" align="right" class="btn btn-su">登入</a>  
                   @else
                       快去發文 <a href="{{ route('posts.create') }}" align="right" class="btn btn-su">發文</a>   
                   @endguest
                </div>
                <div class="links">
                    <a href="{{ route('newest') }}">最新文章</a>
                    <a>|</a>
                    <a href="">熱門文章</a>
                    <a>|</a>
                    <a href="{{route('class.index')}}">文章分類</a>
                </div>
            </div>
        </div>
    </body>
</html>
