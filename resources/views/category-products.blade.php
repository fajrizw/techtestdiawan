<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Products</title>
</head>
<body>
    <h1>Products for Category: {{ $category->name ?? 'Unknown Category' }}</h1>

    @if(isset($error))
        <p>{{ $error }}</p>
    @elseif($products->isEmpty())
        <p>No products available for this category.</p>
    @else
        <ul>
            @foreach ($products as $product)
                <li>{{ $product->name }} - ${{ $product->price }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
