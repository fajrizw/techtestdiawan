<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories List</title>
</head>
<body>
    <h1>All Categories</h1>

    @if($categories->isEmpty())
        <p>No categories available.</p>
    @else
        <ul>
            @foreach ($categories as $category)
                <li><a href="{{ url('/categories/' . $category->id . '/products') }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    @endif
</body>
</html>
