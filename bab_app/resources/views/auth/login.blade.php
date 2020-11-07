@extends('_layouts.app') @section('page_title', 'Book a book | Connection')
@section('title')
<img src="#TODO logo" alt="Logo de Book a book" />
<span> Book a book</span>
@endsection
@section('main_content')
<h2>Se connecter</h2>
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
@endsection
