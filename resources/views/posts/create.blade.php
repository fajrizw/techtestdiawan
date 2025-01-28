

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<body>
    <h1>Create Post</h1>

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

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        @isset($post)
            @method('PUT')
        @endisset

        <label>Title</label>
        <input type="text" name="title" value="{{ old('title', $post->title ?? '') }}" required>

        <label>Content</label>
        <textarea name="content" required>{{ old('content', $post->content ?? '') }}</textarea>

        <label>Author</label>
        <input type="text" name="author" value="{{ old('author', $post->author ?? '') }}" required>

        <button type="submit">{{ isset($post) ? 'Update' : 'Create' }}</button>
    </form>
</body>
</html>
