<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>♪ My MusicFes ♪</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Timeline</h1>
        <form action="/posts" method="POST">
            {{ csrf_field() }}
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="content">
                <h2>Body</h2>
                <textarea name="post[content]" placeholder="投稿記入"></textarea>
                 <p class="content__error" style="color:red">{{ $errors->first('post.content') }}</p>
            </div>
            <input type="submit" value="投稿[Post]"/>
        </form>
        <div class='back'>[<a href='/'>Back</a>]</div>
    </body>
</html>
