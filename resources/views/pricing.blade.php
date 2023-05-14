<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="container">

    <header>

        <h1>Ciao {{$name}} {{$surname}}</h1>
        
        <div>
            <ul>
                <li>
                    <a href="/home">Home Page</a>
                </li>
                <li>
                    <a href="/articles">Articoli</a>
                </li>
                <li>
                    <a href="/pricing">Offerte</a>
                </li>
                
            </ul>
        </div>
    </header>

    <hr>

    <main>
        <h2>Scopri le Offerte</h2>
    </main>

</body>

</html>