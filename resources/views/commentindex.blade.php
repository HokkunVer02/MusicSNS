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
        <p class='create'>[<a href='/comments/create'>create</a>]</p>
        <div class='comments'>
            @foreach($comments as $comment)
            <div class='comment'>
                <h2 class='title'>[<a href="/comments/{{ $comment->id }}">{{ $comment->title }}</a>]</h2>
                <p class='body'>{{ $comment->content }}<br>画像{{ $comment->image_path }}<br>ユーザーID：{{ $comment->user_id }}<br>投稿ID：{{ $comment->post_id }}<br>高評価数：{{ $comment->good }}</p>
            </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $comments->links() }}
        </div>
    </body>
</html>
