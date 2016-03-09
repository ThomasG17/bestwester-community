<div id="container">
	<h1>Ajouter une nouvelle actualité</h1>
	<form role="form" action="/addNews/insert" method="POST" class="col-md-offset-1 col-sm-offset-1">
		<label for="title">Titre</label>
			<input type="text" id="title" name="title">
		<label for="content">Contenu</label>
			<input type="text" id="content" name="content">

			<input type="submit" class="btn btn-customize">
	</form>
</div>