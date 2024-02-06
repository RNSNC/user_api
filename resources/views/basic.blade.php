<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
</head>
<body class="bg-body-tertiary">
    <div class="container">
        <div>
            <nav class="navbar navbar-expand-lg bg-body-secondary mb-4">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" id="nav-ajax" href="{{ route('home') }}">Home(AJAX)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nav-standard" href="{{ route('user.index') }}">Home(Standard)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nav-inport-export" href="{{ route('user.import_export') }}">Import/Export</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        @if(Session::has('error'))
            <div class="alert alert-danger">
                {{ Session::get('error') }}
            </div>
        @endif
        @yield('content')
    </div>
</body>
</html>
