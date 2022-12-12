<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login CRUD</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="https://emojitool.com/img/apple/ios-13.3/father-christmas-type-1-2-3000.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="antialiased">
    <div id="app">
        <loader-component></loader-component>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
            <a class="navbar-brand" href="https://youtu.be/hunv2Xklr4Q" target="_blank">
               <img src="https://emojitool.com/img/apple/ios-13.3/father-christmas-type-1-2-3000.png" width="60" height="60" class="d-inline-block align-top" alt="papo noel?">
             </a>
                <a class="navbar-brand" href="/crud/public/">Crud Laravel-Vue con Login</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <router-link class="nav-link" to="/">Home</router-link>
                        </li>
                        
                            <li class="nav-item">
                                <router-link class="nav-link" to="/categorias">Categorias</router-link>
                            </li>
                            <li class="nav-item">
                                <router-link class="nav-link" to="/posts">Post</router-link>
                            </li>
                        
                    </ul>
                    <ul class="navbar-nav float-end mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="{{route('logout')}}" class="link-warning rounded-pill" style="font-size: 121%" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{route('logout')}}" method="POST">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-4">
            <router-view></router-view>
        </div>
    </div>

    <script>
        window.user = @json(auth()->user());
        window.user_roles = @json(auth()->user()->roles);
        window.user_permissions = @json(auth()->user()->permissions);
    </script>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
