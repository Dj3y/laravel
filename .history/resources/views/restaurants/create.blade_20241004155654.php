<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form to create a restaurant</h1>
    
    <h2>{{ $restaurant->name }}</h2>
    <ul>
        <li><strong>Address:</strong></li> 
        <ul>
            <li> <strong>Name of the street:</strong> {{ $restaurant->address }}</li>
            <li><strong>The zip code:</strong> {{ $restaurant->zipCode }}</li>
            <li><strong>The town:</strong> {{ $restaurant->town }}</li>
            <li><strong>The country:</strong> {{ $restaurant->country }}</li>
        </ul>
        <li><strong>Description:</strong> {{ $restaurant->description }}</li>
        <li><strong>Description:</strong> {{ $restaurant->review }}</li>
    </ul>
    @endphp
</body>
</html>