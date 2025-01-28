<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>
    <h1>All Posts</h1>

    <form method="GET">
        <input type="text" name="search" placeholder="Search by title or author" value="{{ request('search') }}">
        <button type="submit">Search</button>
    </form>

    <a href="{{ route('posts.create') }}">Create New Post</a>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <ul>
        @foreach ($posts as $post)
            <li>
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>
                <p>Author: {{ $post->author }}</p>
                <a href="{{ route('posts.edit', $post) }}">Edit</a>
                <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    {{ $posts->links() }}
</body>
</html>
