<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>♪ My MusicFes ♪</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>コメント編集</h1>
        <form action='/comments/{{ $comment->id }}' method="POST">
            {{ csrf_field() }}
            @method('PUT')
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="comment[title]" placeholder="タイトル" value="{{ $comment->title }}"/>
            </div>
            <div class="content">
                <h2>Body</h2>
                <textarea name="comment[content]" placeholder="コメント記入">{{ $comment->content }}</textarea>
            </div>
            <input type="submit" value="更新[Update]"/>
        </form>
        <div class='back'>[<a href='/comments/{{ $comment->id }}'>戻る[Back]</a>]</div>
    </body>
</html>