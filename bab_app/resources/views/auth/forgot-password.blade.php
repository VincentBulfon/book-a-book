@extends('_layouts.app') @section('page_title', 'Book a book | Connection')
@section('title')
<img src="#TODO" alt="">
Book a book
@endsection
@section('main_content')
<h2>Récupérer son mot de passe</h2>
<form action="/forgot-password" method="POST">
    <!-- TODO verifier dans la doc de fortify que forgot password recoit bien les bonnes infos et le customizer pour pouvoir récupérer avec nom et prénom -->
    <label for="email">Email&nbsp;:</label>
    <input type="email" name="email" id="email" />
    <span>Ou</span>
    <label for="name">Nom&nbsp;:</label>
    <input type="text" name="name" id="name" />
    <label for="firstname">Prénom&nbsp;:</label>
    <input type="text" name="firstname" id="firstname" />
    <button type="submit">Récupérer</button>
</form>
@endsection
