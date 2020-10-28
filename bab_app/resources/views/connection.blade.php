@extends('layouts.head') @section('title', 'Book a book | Connection')
<header>
    <h1>
        <img src="#TODO logo" alt="Logo de Book a book" />
        <span> Book a book</span>
    </h1>
</header>
<main>
    <form action="#TODO" method="#TODO">
        <label for="email">Email&nbsp;:</label>
        <input type="email" id="email" name="email" />
        <!-- TODO insert error field here -->
        <label for="password">Mot de passe&nbsp;:</label>
        <input type="password" id="password" name="password" />
        <!-- TODO insert erro field here -->
        <button type="submit">Se connecter</button>
    </form>
    <a href="#TODO">Mot de passe oublié?</a>
    <span>Pas encore de compte ? <a href="#TODO">Créer en un ici!</a></span>
</main>
@include('layouts.footer')
