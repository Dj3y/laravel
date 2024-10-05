<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurants</title>
</head>
<body>
    <h1>All restaurants</h1>
    <!-- create, initialization, of variables -->
    @php
        $age = 15;
        $a = 3;
        $posts = ['test', 'function', 'laravel']
    @endphp
    
    <!-- @if($age >= 18) -->
        <!-- <p>You are an adult.</p> -->
    <!-- @else -->
        <!-- <p>You are a teenager.</p> -->
    <!-- @endif -->

    <!-- @for($i = 1; $i <= $a; $i++) -->
        <!-- <p>The current value is {{ $i }}</p> -->
    <!-- @endfor -->

    <!-- @foreach($posts as $post) -->
        <!-- <p>Title: {{ $post }}</p> -->
    <!-- @endforeach -->
    
    @foreach ( $restaurants as $restaurant )
    <h2>{{ $restaurant->name }}</h2>
    <ol>
        <li>Adress: {{ $restaurant->address }} </li> 
    </ol>
    @endforeach
</body>
</html>