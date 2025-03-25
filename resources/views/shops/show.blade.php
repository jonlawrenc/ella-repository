<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show</title>
</head>
<body>
<h1>{{ $shop->name }}</h1>
<p>{{ $shop->description }}</p>
<p>Price: ${{ $shop->price }}</p>
<a href="{{ route('shops.index') }}">Back to List</a>

</body>
</html>