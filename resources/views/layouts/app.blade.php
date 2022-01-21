<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('description')"/>
    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mobile.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/responsive.js') }}" defer></script>

</head>
<body>
    <header>
        <div class="brand">
            <a href="{{route('home')}}">{{ config('app.name', 'Laravel') }}</a>
        </div>
        <div class="input-search">
            <input type="text">
            <button class="btn">Rechercher</button>
        </div>
        <div class="socials-links">
            <div class="text">
                <span>Suivez moi sur</span>
            </div>
            <div class="icones">
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-github"></i></a>
            </div>
        </div>
        <div class="action">
            <a class="btn" href="">Connexion</a>
        </div>
    </header>
    <nav>
        <div class="brand-nav">
            <a href="/">{{ config('app.name', 'Laravel') }}</a>
        </div>
        <ul>
            @foreach ($categories as $categorie)
                <li>
                    <a href="{{ route('byCategorie',['slug'=>$categorie->slug]) }}">
                        {{ $categorie->title }}
                    </a>
                </li>
            @endforeach
        </ul>
        <div class="mobile-actions">
            <div class="search-togler">
                <a href="">
                    <i class="fa fa-search"></i>
                </a>
            </div>
            <div class="menu-toggler">
                <i class="fa fas fa-minus"></i>
                <i class="fa fas fa-minus"></i>
                <i class="fa fas fa-minus"></i>
            </div>
        </div>
    </nav>
    <div class="menu-mobile">
        <div class="brand">
            <h2>{{ config('app.name', 'Laravel') }}</h2>
            <div class="close">X</div>
        </div>
        <ul class="menu-items">
                        
            @foreach ($categories as $categorie)
                <li>
                    <a href="{{ route('byCategorie',['slug'=>$categorie->slug]) }}">
                        {{ $categorie->title }}
                    </a>
                </li>
            @endforeach
                
        </ul>
    </div>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
</body>
</html>