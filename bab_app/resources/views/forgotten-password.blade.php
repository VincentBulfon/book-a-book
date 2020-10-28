@extends('layouts.base-connection-layout') @section('title', 'Récupérer mon mot
de passe') @section('link', './forgotten-password.blade.php')
@section('content')
<form action="#TODO" method="#TODO">
    <label for="email">Email&nbsp;:</label>
    <input type="email" name="email" id="email" />
    <span>Ou</span>
    <label for="name">Nom&nbsp;:</label>
    <input type="text" name="name" id="name" />
    <label for="firstname">Prénom&nbsp;:</label>
    <input type="text" name="firstname" id="firstname" />
    <button type="submit">Récupérer</button>
</form>
@endsection @include('layouts.footer')
