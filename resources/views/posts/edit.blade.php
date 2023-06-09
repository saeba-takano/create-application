<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <!-- html langは言語を指定する。この場合、config/app.phpwp指定しているのか？　-->
    <head>
        <meta charset="utf-8">
        <title>minnnanosakagura</title>
        <!-- Fonts -->
    </head>
     <x-app-layout>
            <x-slot name="header">
                みんなの酒蔵
            </x-slot>
    <body>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="alcohol_name">
                <h2>{{$alcohol->name}}</h2>
            </div>
            <div class="comment">
                <h2>コメント</h2>
                <textarea name="post[comment]" placeholder="コメントを入力してください。" >{{ $post->comment }}</textarea>
                </textarea>
                <p class="comment_error" style="color:red">{{$errors->first('post.comment')}}</p>
            </div>
            <input type="submit" value="update"/>
        <div class="footer">
            <a href="/posts/{{ $post->id }}">戻る</a>
    </body>
    </x-app-layout>