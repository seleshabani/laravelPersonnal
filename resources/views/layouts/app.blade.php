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
    <link rel="stylesheet" href="{{ asset('css/cat.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/responsive.js') }}" defer></script>
    
</head>
<style>
    header .action{
        display: flex;
        flex-direction: row;
        gap: .1rem;
    }
</style>
<body>
    <header>
        <div class="brand">
            <a href="{{route('home')}}">{{ config('app.name', 'Laravel') }}</a>
        </div>
        <form class="input-search" action="{{ route('search')}}/" method="get">
            @csrf
            <input type="text" name="query">
            <button class="btn">Rechercher</button>
        </form>
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
            @auth
                <a href="{{ route('logOut') }}" class="btn">Deconnexion  - {{ Auth::user()->name }}</a>
            @else
                <a class="btn" href="{{ route('loginMode')}}">Connexion</a>
                <a class="btn" href="{{ route('registerMode')}}">Inscription</a>
            @endauth
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
    <footer>
        <div class="site-map">
            <ul>
                @foreach ($categories as $categorie)
                    <li>
                        <a href="{{ route('byCategorie',['slug'=>$categorie->slug]) }}">
                            {{ $categorie->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </footer>
</body>
</html>