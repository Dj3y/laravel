<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurants</title>
</head>
<body>
    <h1>All restaurants</h1>
    
    
    @foreach ( $restaurants as $restaurants )
    <h2>{{ $restaurants->name }}</h2>
    
    @endforeach
</body>
</html>