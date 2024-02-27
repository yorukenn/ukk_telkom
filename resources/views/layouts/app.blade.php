<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Your App Name')</title>


    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


    <!-- Custom CSS -->

    <style>

        body {

            padding-top: 5rem;

        }

        .starter-template {

            padding: 3rem 1.5rem;

            text-align: center;

        }

    </style>

    <!-- Lightbox CSS -->

<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">


<!-- Lightbox JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

<!-- Custom CSS -->

<style>

body {
    padding-top: 5rem;
    background-color: #C3D3D6; /* Warna latar belakang */
}

.starter-template {
    padding: 3rem 1.5rem;
    text-align: center;
}

.container {
    background-color: #FFFFFF; /* Latar belakang container */
    border-radius: 10px;
    
    padding: 20px;
    margin-top: 20px;
}

.navbar {
    background-color: #343a40;
}

.navbar-brand {
    color: #26C6ED !important; /* Warna biru teks brand */
}

.navbar-brand span {
    color: #6c757d !important; /* Warna abu teks span */
}

.navbar-toggler-icon {
    background-color: #007bff; /* Warna biru pada toggler icon */
}

.nav-item .nav-link:hover {
    color: #6CD12F !important; /* Warna ijo pas dihover */
}

.nav-item:last-child .nav-link {
    color: #dc3545 !important; /* Warna merah buat logout */
    cursor: pointer;
}

.nav-item:last-child .nav-link:hover {
    text-decoration: underline;
}

.foto-container {
    border: 1px solid #ddd;
    padding: 15px;
    margin-bottom: 20px;
    transition: transform .2s;
}

.foto-container:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0, 0, 0, .1);
}

.foto-thumbnail {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 5px; /* Tambahkan sudut bulat pada thumbnail */
}

.foto-title {
    font-size: 18px;
    color: #007bff; /* Warna biru untuk judul foto */
    margin-top: 15px;
}

.foto-description {
    background-color: #f8f9fa;
    padding: 10px;
    margin-top: 10px;
    border-radius: 5px;
    font-size: 14px;
}

.foto-title a {
    color: #000;
    text-decoration: none;
    transition: color 0.3s;
}

.foto-title a:hover {
    color: #3D44EB; /* Warna maroon saat hover */
}




</style>

</head>

<body>


<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

    <a class="navbar-brand" href="#">Photo Gallery</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

    </button>


    <div class="collapse navbar-collapse" id="navbarsExampleDefault">

        <ul class="navbar-nav mr-auto">

            <li class="nav-item active">

                <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>

            </li>

            <li class="nav-item">

                <a class="nav-link" href="/album">Album</a>

            </li>

            <li class="nav-item">

                <a class="nav-link" href="{{ route('foto.index') }}">Foto</a>

            </li>

            @guest

            <li class="nav-item">

                <a class="nav-link" href="/signup">Signup</a>

            </li>

            <li class="nav-item">

                <a class="nav-link" href="/login">Login</a>

            </li>

            @endguest

            
            <li class="nav-item">
                @if (Auth::check())
                    <form action="{{ route('auth.logout') }}" method="POST" style="display:none;" id="logout-form">
                        @csrf
                    </form>
                    <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                @endif
            </li>
        </ul>

    </div>

</nav>


<main role="main" class="container">

    <div class="starter-template">

        @yield('content')

    </div>

</main>


<!-- jQuery and Bootstrap Bundle (includes Popper) -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>


</body>

</html>