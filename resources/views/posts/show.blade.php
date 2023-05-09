<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <!-- html langは言語を指定する。この場合、config/app.phpwp指定しているのか？　-->
    <head>
        <meta charset="utf-8">
         <meta name="viewpoint" content="width=device-width, initial-scale=1.0">

        <title>minnnanosakagura</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
     <x-app-layout>
            <x-slot name="header">
                みんなの酒蔵
            </x-slot>
    <body>
        <div>
            <h2 class="alcohol_name">
                {{$post->alcohol->alcohol_name}}
            </h2>
        </div>
        <div class="comment">
            <div class="comment_post">
                <p>{{$post->comment}}</p> 
            </div>
        </div>
        <div class="edit">
            <a href="/posts/{{ $post->id }}/edit">編集</a>
        </div>
        <div class="footer">
            <a href="/">ホームに戻る</a>
        </div>
       

    </body>
    </x-app-layout>
    