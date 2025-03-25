<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
<h1>Edit Shop</h1>
<form action="{{ route('shops.update', $shop->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ $shop->name }}" required><br>

    <label for="description">Description:</label>
    <textarea name="description" id="description" required>{{ $shop->description }}</textarea><br>

    <label for="price">Price:</label>
    <input type="number" name="price" id="price" value="{{ $shop->price }}" required><br>

    <button type="submit">Update</button>
</form>

</body>
</html>