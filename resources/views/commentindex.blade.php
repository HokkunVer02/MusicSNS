<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>♪ My MusicFes ♪</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>コメント一覧</h1>
        <div class='comments'>
            @foreach($comments as $comment)
            <div class='post'>
                <h2 class='title'>{{ $comment->title }}</h2>
                <p class='body'>{{ $comment->content }}</p>
            </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $comments->links() }}
        </div>
    </body>
</html>
