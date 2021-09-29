<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>♪ My MusicFes ♪</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Timeline</h1>
        <p class='create'>[<a href="/posts/create">新規投稿[New Post]</a>]</p>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>[<a href="/posts/{{ $post->id }}">{{ $post->title }}</a>]</h2>
                    <p class='body'>{{ $post->content }}<br>{{ $post->image_path }}<br>{{ $post->good}}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>