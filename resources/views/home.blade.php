<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Cinema Plus</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Link to your CSS file -->
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('movies.index') }}">Movies</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Welcome to Cinema Plus</h1>
        <p>Your one-stop destination for all things cinema. Explore the latest movies, reviews, and more!</p>

        <section>
            <h2>Featured Movies</h2>
            <div class="movie-list">
                <!-- Example of dynamic movie content -->
                @foreach($movies as $movie)
                    <div class="movie">
                        <h3>{{ $movie->title }}</h3>
                        <p>{{ $movie->description }}</p>
                        <a href="{{ route('movies.show', $movie->id) }}">View Details</a>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Cinema Plus. All rights reserved.</p>
    </footer>
    
    <script src="{{ asset('js/app.js') }}"></script> <!-- Link to your JavaScript file -->
</body>
</html>
