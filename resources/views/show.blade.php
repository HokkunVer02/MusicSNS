<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>♪ My World Of Music ♪</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class='post'>
                    <h2 class='title'>{{ $post->title }}</h2>
                    <p class='content'>{{ $post->content }}<br>{{ $post->image }}<br>{{ $post->good}}</p>
                    <p class='updated_at'>{{ $post->updated_at }}</p>
        </div>
        <div class='back'>[<a href="/">Back</a>]</div>
    </body>
</html>
