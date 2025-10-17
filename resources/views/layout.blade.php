<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Maisonneuve - Gestion des étudiants')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">College Maisonneuve</a>
            <div>
                <a class="nav-link d-inline text-white" href="{{ route('accueil') }}">Accueil</a>
                <a class="nav-link d-inline text-white" href="{{ route('etudiants.index') }}">Étudiants</a>

            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="text-center py-8 mt-5 bg-primary text-white">
        &copy; {{ date('Y') }} - Maisonneuve
    </footer>

</body>

</html>