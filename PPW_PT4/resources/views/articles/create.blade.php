<!-- resources/views/articles/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Buat Artikel Baru</title>
</head>
<body>
    <h1>Buat Artikel Baru</h1>
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <label for="title">Judul:</label><br>
        <input type="text" id="title" name="title"><br><br>

        <label for="content">Konten:</label><br>
        <textarea id="content" name="content"></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
