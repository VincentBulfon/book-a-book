@extends('_layouts.app') @section('page_title', 'Book a book | Connection')
@section('title')
Book a book
@endsection
@section('main_content')
<h2>Créer une nouvelle commande</h2>
<form
	action="#TODO"
	method="post"
>
	<table>
		<thead>
			<tr>
				<!-- #TODO definir le tris dans les requêtes afin de trier entièrement les résutats rendu -->
				<th><a href="">Titre</a></th>
				<th><a href="">Prix</a></th>
				<th><a href="">Status</a></th>
			</tr>
		</thead>
		<tbody>
			<!-- foreach -->
			<tr>
				<td>CSS avancées</td>
				<td>sample</td>
				<td>sample</td>
			</tr>
			<!-- endforeach -->
			<tr>
				<td>Css avancées 2</td>
				<td>sample</td>
				<td>sample</td>
			</tr>
			<tr>
				<td>Css avancées 3</td>
				<td>sample</td>
				<td>sample</td>
				<!-- if smth show this -->
				<x-create-order-expand />
				<!-- endif -->
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
	<!--override default form action -->
	<div>
		<button
			type="submit"
			formaction="save"
		>Sauver la commande</button>
		<button type="submit">Passer la commande</button>
	</div>
</form>
@endsection