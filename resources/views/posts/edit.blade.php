<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}">
        <br>

        <label for="content">Content:</label>
        <textarea id="content" name="content">{{ old('content', $post->content) }}</textarea>
        <br>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" value="{{ old('author', $post->author) }}">
        <br>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('posts.show', $post->id) }}">Cancel</a>
</body>
</html>
