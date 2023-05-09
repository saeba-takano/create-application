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
        <h1 class="title">
            {{$kind->kind_name}}
        </h1>
        <div class="content">
            @foreach($kinds as $kind)
            <div class="alcohol">
                    <a href="/alcohols/{{$kind->id}}">{{$kind->alcohol_name}}</a>
            </div>
            @endforeach
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
       

    </body>
    </x-app-layout>
    