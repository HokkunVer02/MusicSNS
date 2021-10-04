<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>♪ My MusicFes ♪</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>コメント詳細</h1>
            <div class='comment'>
                <h2 class='title'>{{ $comment->title }}</h2>
                <p class='body'>{{ $comment->content }}<br>{{ $comment->image_path }}<br>{{ $comment->good }}</p>
                <p class='updated_at'>{{ $comment->updated_at }}</p>
            </div>
        <div class='back'>[<a href='/comments'>戻る[Back]</a>]</div>
    </body>
</html>
