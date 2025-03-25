<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My shop</title>
</head>
<body>
<h1>Shops</h1>

<!-- Link to add a new shop -->
<a href="{{ route('shops.create') }}">Add Shop</a>

<!-- List all the shops -->
<ul>
    @foreach ($shops as $shop)
        <li>
            {{ $shop->name }} - ${{ $shop->price }}
            
            <!-- Link to edit the shop -->
            <a href="{{ route('shops.edit', $shop->id) }}">Edit</a>

            <!-- Form to delete the shop -->
            <form action="{{ route('shops.destroy', $shop->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>

</body>
</html>