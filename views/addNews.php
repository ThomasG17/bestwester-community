<?php

	$allNews = new newsModel();
	$allNews->getAll(true);

	$allImg = new news_imgModel();
	$allImg->getAll(true);

	$allGroup = new groupModel();
	$allGroup->getAll(true);


?>

<div id="container">
	<h1>Ajouter une nouvelle actualité</h1>
	<form role="form" action="/addNews/insert" method="POST" class="col-md-offset-1 col-sm-offset-1" enctype="multipart/form-data">
		<label for="title">Titre</label>
			<input type="text" id="title" name="title">
		<label for="content">Contenu</label>
			<input type="text" id="content" name="content">
			<input type="file" name="newsimg">

			<input type="hidden" name="MAX_FILE_SIZE" value="50000">
			<input type="submit" name="upload" class="btn btn-customize">
		<label for="group">Choisir un groupe</label>
			<select name="group">
				<?php
					foreach($allGroup as $group) :
				?>

					<option value="<?php echo $group['id']; ?>"><?php echo $group['name']; ?></option>

				<?php
					endforeach;
				?>
			</select>
	</form>

	<?php
		foreach($allNews as $news){

			foreach($allImg as $img) {
				if($img['id_news'] == $news['id']) {
					echo '<img src="../public/images/news/'.$img['id_img'].'">';
				}
			}
	?>
			<p><b><?php echo $news['title']; ?></b></p>
			<p><?php echo $news['content']; ?></p>
	<?php			
		}
	?>


</div>