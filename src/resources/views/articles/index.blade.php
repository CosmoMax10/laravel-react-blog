<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/main.css">
</head>
<body>
    <header>
        <div class="site-title">ミニブログ</div>
    </header>
    <main class="container">
        <p><a href="{{ route('articles.create') }}">記事を書く</a></p>
        @foreach ($articles as $article)
        <article class="article-item">
            <div class="article-title">{{ $article->title }}</div>
            <div class="article-body">{{ $article->body }}</div>
        </article>
        @endforeach
    </main>
</body>
</html>
