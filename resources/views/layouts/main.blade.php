<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Ajoutez ici vos balises meta, stylesheets, scripts, etc. communs à toutes les pages -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/article-details.css') }}">
</head>
<body>

    @include('partials.navbar')

  
        @yield('content')
   

    @include('partials.footer')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const hamburger = document.querySelector('.hamburger');
            const navUl = document.querySelector('nav ul');

            hamburger.addEventListener('click', function () {
                navUl.classList.toggle('show');
            });
        });
    </script>

</body>
</html>