<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"><head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>@yield('title')</title>

   <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">


</head>
<body class="d-flex h-100 text-center text-bg-dark">
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <div>
            <h3 class="float-md-start mb-0">IT Event</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                        @auth
                            <ul class="navbar-nav">
                                <li class="nav-item" style="display:inline-flex">
                                    <form action="{{ route('edit', \Illuminate\Support\Facades\Auth::id()) }}" method="GET" style="margin-right: 5px">
                                        @csrf
                                        <input class="btn btn-outline-primary" type="submit" value="Обновить персональные данные">
                                    </form>
                                    <form action="{{ route('delete', \Illuminate\Support\Facades\Auth::id()) }}" method="POST" style="margin-right: 5px">
                                        @csrf
                                        @method('DELETE')
                                        <input class="btn btn-outline-primary" type="submit" value="Удалить профиль">
                                    </form>
                                    <form action="{{ route('logout') }}" method="POST" style="margin-right: 5px">
                                        @csrf
                                        <input class="btn btn-outline-primary" type="submit" value="Выйти">
                                    </form>
                            </ul>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Войти</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Регистрация</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </nav>
        </div>
    </header>
    <main class="px-3">
        @yield('content')
        @yield('main')
    </main>
    <footer class="mt-auto text-white-50">

    </footer>
</div>



</body>
</html>

