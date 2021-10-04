<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>♪ My MusicFes ♪</title>
    </head>
    <body>
        <h1>コメント作成</h1>
        <form action="/comments" method="POST">
            {{ csrf_field() }}
            <div class="title">
                <h2>Title</h2>
            <input type="text" name="comment[title]" placeholder="タイトル" value="{{ old('comment.title') }}"/>
            <p class="title__error" style="color:red">{{ $errors->first('comment.title') }}</p>
            </div>
            <div class="content">
                <h2>Body</h2>
                <textarea name="comment[content]" placeholder="コメント記入"></textarea>
                <p class="content__error" style="color:red">{{ $errors->first('comment.content') }}</p>
            </div>
            <input type="submit"　value="投稿[Post]"/>
        </form>
        <div class='back'>[<a href='/comments'>戻る[Back]</a>]</div>
    </body>
</html>