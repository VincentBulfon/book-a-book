@extends('_layouts.app') @section('page_title', 'Book a book | Connection')
@section('title')
Book a book
@endsection
@section('main_content')
<h2>Modification ajout de livre à la commande</h2>
<form
	action="#TODO"
	method="post"
>
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
			<!-- foreach -->
			<tr>
				<td>00000007685</td>
				<td>03/05/1998</td>
				<td>en attente</td>

			</tr>
			<!-- endforeach -->
			<tr>
				<td>00000007685</td>
				<td>03/05/1998</td>
				<td>en attente</td>
			</tr>
			<tr>
				<td>00000007685</td>
				<td>03/05/1998</td>
				<td>en attente</td>
			</tr>
			<tr>
				<td>00000007685</td>
				<td>03/05/1998</td>
				<td>en attente</td>
			</tr>
			<tr>
				<td>00000007685</td>
				<td>03/05/1998</td>
				<td>en attente</td>
			</tr>
			<tr>
				<td>00000007685</td>
				<td>03/05/1998</td>
				<td>en attente</td>
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