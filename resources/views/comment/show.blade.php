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
        <p class="edit">[<a href="/comments/{{ $comment->id }}/edit">編集[Edit]</a>]</p>
        <form action="/comments/{{ $comment->id }}" id="form_delete" method="post">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <input type="submit" style="display:none">
            <p class='delete'>[<span onclick="return deleteComment(this);">削除[Delete]</span>]</p>
        </form>
        <div class='comment'>
            <h2 class='title'>{{ $comment->title }}</h2>
            <p class='body'>{{ $comment->content }}<br>{{ $comment->image_path }}<br>{{ $comment->good }}</p>
            <p class='updated_at'>{{ $comment->updated_at }}</p>
        </div>
        <div class='back'>[<a href='/comments'>戻る[Back]</a>]</div>
        <script>
            function deleteComment(e){
                'use strict';
                if (confirm('削除すると復元できません。\n本当に削除しますか？')){
                    document.getElementById('form_delete').submit();
                }
            }
        </script>
    </body>
</html>
