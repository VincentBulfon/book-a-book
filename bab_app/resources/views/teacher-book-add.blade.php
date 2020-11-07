@extends('_layouts.app') @section('page_title', 'Book a book | Connection')
@section('title')
Book a book
@endsection
@section('main_content')
<h2>Ajouter un livre</h2>
<form action="" method="post">
    <h3>Infos du livre</h3>
    <label for="cover">Couverture du livre&nbsp;:</label>
    <input type="file" name="cover" id="cover">
    <label for="title">Titre du livre&nbsp;:</label>
    <input type="text" name="title" id="title">
    <label for="authors">Auteurs du livre&nbsp;:</label>
    <input type="text" name="authors" id="authors" placeholder="Prénom Nom, Prénom Nom,..."><label for="isbn">ISBN&nbsp;:</label>
    <input type="number" name="isbn" id="isbn" placeholder="978-2081342620">
    <label for="edition">Édition&nbsp;:</label>
    <input type="text" name="edition" id="edition">
    <label for="public_price">Prix publique (€)&nbsp;:</label>
    <input type="number" name="public_price" id="public_price" placeholder="8,10">
    <label for="student_price">Prix étudiant (€)&nbsp;:</label>
    <input type="number" name="student_price" id="student_price" placeholder="8,10">
    <label for="edition_note">Remarque sur l'édition&nbsp;:</label>
    <textarea name="edition_note" id="" cols="30" rows="10" placeholder="Entrez votre texte ici. ✍️"></textarea>
    <button type="reset">Effacer</button>
    <button type="submit">Ajouter le livre</button>
</form>
<p>Le livre que vous cherchez est introuvable ?</p>
<a href="">Ajouter un livre</a>
</section>
@endsection
