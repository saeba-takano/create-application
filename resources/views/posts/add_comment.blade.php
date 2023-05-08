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
        <h1>コメントの投稿</h1>
        <form action="/posts/add_comment" method="POST">
            @csrf
           <div class='alcohol'>
                <h2>お酒の名前</h2>
                <select name="post[alcohol_id]">
                    @foreach($alcohols as $alcohol)
                        <option value="{{$alcohol->id}}">{{$alcohol->alcohol_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="comment">
                <h2>コメント</h2>
                <textarea name="post[comment]" placeholder="どんな味？" value={{ old('post.comment')}}></textarea>
                <p class="comment_error" style="color:red">{{$errors->first('post.comment')}}</p>
            </div>
            <input type="submit" value="投稿"/>
        <div class="footer">
            <a href="/">ホームに戻る</a>
    </body>
    </x-app-layout>