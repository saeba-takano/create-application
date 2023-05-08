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
        <h1>お酒の追加</h1>
        <form action="/posts/add_alcohol" method="POST">
            @csrf
            <div class="name">
                <h2>お酒の名前</h2>
                <input type="text" name="post[alcohol_name]" placeholder="お酒の名前" value={{ old('post.alcohol_name') }}>
                <p class="name_error" style="color:red">{{$errors->first('post.alcohol_name')}}</p>
            </div>
            <div class="introduction">
                <h2>イントロダクション</h2>
                <textarea name="post[introduction]" placeholder="この欄は任意です。" value={{ old('post.introduction') }}></textarea>
                <p class="introduction_error" style="color:red">{{$errors->first('post.introduction')}}</p>
            </div>
            <div class='kind'>
                <h2>カテゴリー</h2>
                <select name="post[kind_id]">
                    @foreach($kinds as $kind)
                        <option value="{{$kind->id}}">{{$kind->kind_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class='country'>
                <h2>生産国</h2>
                <select name="post[country_id]">
                    @foreach($countries as $country)
                        <option value="{{$country->id}}">{{$country->country_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class='degree'>
                <h2>度数</h2>
                <select name="post[degree]">
                    <?php
                         for ($i=1; $i<=100; $i++)
                            {
                     ?>
                        <option value="<?php echo $i;?>"><?php echo $i;?></option>
                    <?php
                             }
                    ?>
                </select>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
    </body>
    </x-app-layout>