@yield('head') @section('title', 'Mot de passe oublié')
<header>
    <h1>@yield('title')</h1>
    <nav>
        <h2>Navigation principale</h2>
        <a href="@yield('link')"
            ><span>Retour à la page précédente</span><img src="#TODO" alt=""
        /></a>
    </nav>
</header>
<main>
    @section('content') @show
</main>
@extends('layouts.footer')
