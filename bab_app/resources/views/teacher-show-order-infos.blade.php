@extends('_layouts.app') @section('page_title', 'Liste des commandes')
@section('title', 'Book a book')
@section('main_content')
<h2>Commades reçues </h2>
<p>
    Les commandes marquées comme livrées sont automatiquement archivées et
    son accessibles via la page <a href="">"commandes archivées"</a>.
</p>
<!-- TODO method et action du form lui tranmetre la page active -->
<form
    action=""
    action=""
>
    <!-- le label doit être masqué -->
    <label for="searchfor">Rechercher</label>
    <input
        type="text"
        name="searchfor"
        id="searchfor"
        placeholder="n°/nom"
    >
    <button type="submit">Rechercher</button>
</form>
<table>
    <thead>
        <tr>
            <!-- #TODO definir le tris dans les requêtes afin de trier entièrement les résutats rendu -->
            <th><a href="">Numero</a></th>
            <th><a href="">Date</a></th>
            <th><a href="">Status</a></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>sample</td>
            <td>sample</td>
            <td>sample</td>
            <!-- ajouter un if pour afficher le tr relatif a la commande-->
            <x-order-info />
        </tr>
        <tr>
            <td>sample</td>
            <td>sample</td>
            <td>sample</td>
            <!-- ajouter un if pour afficher le tr relatif a la commande-->
            <x-order-info />
        </tr>
        <tr>
            <td>sample</td>
            <td>sample</td>
            <td>sample</td>
            <!-- ajouter un if pour afficher le tr relatif a la commande-->
            <x-order-info />
        </tr>
        <tr>
            <td>sample</td>
            <td>sample</td>
            <td>sample</td>
        </tr>
        <tr>
            <td>sample</td>
            <td>sample</td>
            <td>sample</td>
        </tr>
        <tr>
            <td>sample</td>
            <td>sample</td>
            <td>sample</td>
        </tr>
        <tr>
            <td>sample</td>
            <td>sample</td>
            <td>sample</td>
        </tr>
        <tr>
            <td>sample</td>
            <td>sample</td>
            <td>sample</td>
        </tr>
        <tr>
            <td>sample</td>
            <td>sample</td>
            <td>sample</td>
        </tr>
        <tr>
            <td>sample</td>
            <td>sample</td>
            <td>sample</td>
        </tr>
    </tbody>
</table>
<p>La commande que vous cherchez est introuvable ?</p>
<a href="">Voir les commandes archivées</a>
@endsection