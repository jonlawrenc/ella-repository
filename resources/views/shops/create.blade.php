<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
<h1>Create Shop</h1>
<form action="{{ route('shops.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required><br>

    <label for="description">Description:</label>
    <textarea name="description" id="description" required></textarea><br>

    <label for="price">Price:</label>
    <input type="number" name="price" id="price" required><br>

    <button type="submit">Create</button>
</form>

</body>
</html>