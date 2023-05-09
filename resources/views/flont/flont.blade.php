<!DECOTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>minnnanosakagura</title>
         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
            <x-slot name="header">
                みんなの酒蔵
            </x-slot>
    <body>
        <div class="alcohol_name"><!--名前検索機能後回し-->
            <form action="サイトのURL"method="get">
                <input type="search" name="search" placeholder="お酒の名前を入力">
                <input type="submit" name="submit" value="検索">
            </form>
        </div>
        <div class="kinds">
            <h2 class="kind_title">種類で調べる</h2>
            @foreach($kinds as $kind)
                <a href="kind/{{$kind->id}}">{{$kind->kind_name}}</a>
            @endforeach
        </div>
        <div class="Japan">
            <a href="/prefectures">日本のお酒</a>  <!--詳細表示用bladeファイルを作成-->
        </div>
        <div class="Country">
            <h2>国・地域</h2> 
             @foreach($countries as $country)
                <a href="countries/{{$country->id}}">{{$country->country_name}}</a>
            @endforeach
        </div><!--詳細表示用bladeファイルを作成-->
        <div class="hashtag">
            <p>#で探す</p><!--詳細表示用bladeファイルを作成-->
        </div>
        <div>
           <p>度数で探す</p><!--詳細表示用bladeファイルを作成-->
        </div>
        <a href="/posts/add_alcohol">お酒を追加/コメントを投稿</a><!--add_alcohol.bladeへ移動-->
        
        
       
       
    </body>
    </x-app-layout>
</html>