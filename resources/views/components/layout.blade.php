<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercising</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<header class="position-sticky">
        <nav class="navbar navbar-expand-lg bg-blackblue">
            <div class="container-fluid text-white">
                <a href="/" class="h1 fw-bold text-decoration-none">Exercising</a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navHeader" aria-controls="navHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="{{asset('images/toggler-icon.png')}}" alt="Menu" width="25px">
                </button>

                <div class="collapse navbar-collapse" id="navHeader">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/login" class="nav-link text-white">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="/registration" class="nav-link text-white">Registration</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
</header>
<main>
    {{$slot}}
</main>
<footer>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
