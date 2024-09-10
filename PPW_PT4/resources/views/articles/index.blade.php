<!-- resources/views/articles/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Artikel</title>
</head>
<body>
    <h1>Semua Artikel</h1>
    <a href="{{ route('articles.create') }}">Buat Artikel Baru</a>
    <ul>
        @foreach($articles as $article)
            <li>{{ $article->title }} - {{ $article->content }}</li>
        @endforeach
    </ul>
</body>
</html>
