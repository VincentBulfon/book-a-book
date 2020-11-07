@extends('_layouts.app') @section('page_title', 'Book a book | Connection')
@section('title')
Book a book
@endsection
@section('main_content')
<h2>Liste des livres</h2>
<table>
    <thead>
        <tr>
            <!-- #TODO definir le tris dans les requêtes afin de trier entièrement les résutats rendu -->
            <th scope="col"><a href="">Titre</a></th>
            <th scope="col"><a href="">Dispo.</a></th>
            <th scope="col"><a href="">Stock</a></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>CSS avancées</td>
            <td>Oui</td>
            <td>18</td>
        </tr>
        <!-- ajouter un if pour afficher le tr relatif au livre-->
        <tr>
            <td>CSS avancées</td>
            <td>Oui</td>
            <td>18</td>
        </tr>
        <tr>
            <td>CSS avancées</td>
            <td>Oui</td>
            <td>18</td>
        </tr>
        <tr>
            <td>CSS avancées</td>
            <td>Oui</td>
            <td>18</td>
        </tr>
        <tr>
            <td>CSS avancées</td>
            <td>Oui</td>
            <td>18</td>
        </tr>
        <tr>
            <td>CSS avancées</td>
            <td>Oui</td>
            <td>18</td>
        </tr>
        <tr>
            <td>CSS avancées</td>
            <td>Oui</td>
            <td>18</td>
        </tr>
        <tr>
            <td>CSS avancées</td>
            <td>Oui</td>
            <td>18</td>
        </tr>
        <tr>
            <td>CSS avancées</td>
            <td>Oui</td>
            <td>18</td>
        </tr>
        <tr>
            <td>CSS avancées</td>
            <td>Oui</td>
            <td>18</td>
        </tr>
    </tbody>
</table>
<p>Le livre que vous cherchez est introuvable ?</p>
<a href="">Ajouter un livre</a>
</section>
@endsection