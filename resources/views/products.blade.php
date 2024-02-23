<!DOCTYPE html>
<html>
<head>
    <title>{{ $judul }}</title>
</head>
<body>
    <h1>{{ $judul }}</h1>

    <ul>
        @foreach($products as $product)
            <li>{{ $product }}</li>
        @endforeach
    </ul>
</body>
</html>
