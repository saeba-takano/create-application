<!DECOTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>minnnanosakagura</title>
         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="header-right">
                    <p>みんなの酒蔵</p>
                </div>
                <div class="header-left">
                    <a href="#" class="login">ログイン</a>
                </div>
            </div>
        </header>
        <div class="alcohol_name"><!--名前検索機能後回し-->
            <form action="サイトのURL"method="get">
                <input type="search" name="search" placeholder="お酒の名前を入力">
                <input type="submit" name="submit" value="検索">
            </form>
        </div>
       <div class="kinds">
            <h2 class="kind_title">種類で調べる</h2>
            @foreach($kinds as $kind)
            <div class="kind">
                <a href="/alcohols/$alcohols->kind->id}}">{{$kind->name}}</a>
                <!--kinds.blade.phpへ飛ぶ-->
            </div>
            @endforeach
        </div>
        <div class="Japan">
            <a href="/prefectures">日本のお酒</a>  <!--詳細表示用bladeファイルを作成-->
        </div>
        <div class="Country">
            <a href="/countries">世界のお酒</a> 
        </div><!--詳細表示用bladeファイルを作成-->
        <div class="hashtag">
            <a href="/hashtag_alcohol/{{$hashtag_alcohol->hashtag_name_id}}">#で探す</a><!--詳細表示用bladeファイルを作成-->
        </div>
        <div>
            <a href="/alcohols/{{$alcohols->degree}}">度数で探す</a><!--詳細表示用bladeファイルを作成-->
        </div>
        <a href="/posts/create">お酒を追加/コメントを投稿</a><!--create.bladeへ移動-->
       
       
    </body>
</html>