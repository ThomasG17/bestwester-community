<?php
$allGroup = new groupModel();
$allGroup->getAll(true);
$id = $_SESSION['login_user']['id'];
$allIdGroup = new user_GroupModel();
$groups = $allIdGroup->getAllBy($id);


foreach ($groups as $group) {
	$ids[] = $group['id_group'];
}

$newsGroups = new newsModel();
$OneByOneNews = $newsGroups->getNewsByIds($ids);

foreach ($OneByOneNews as $id_news) {
	$id = ($id_news['id_news']);
	$news = new newsModel();
	$news->getAllBy2($id, $column = 'id');
	$allNews[] = $news;
}


?>

<div id="messages">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
			<div id="add-news">
				<h2>Ajouter une actualité</h2>
				<form role="form" action="/addNews/insert" method="post" class="add-news-form col-md-offset-1 col-sm-offset-1"
				enctype="multipart/form-data">

				<!-- Message title -->
				<input type="text" id="title" name="title" placeholder="Insérez un titre">

				<!-- Message content -->
				<textarea type="text" id="content" name="content" placeholder="Insérez votre contenu"></textarea>

				<!-- Message image -->
				<input type="file" name="newsimg">

				<!-- Groupe -->
				<label for="group">Choisir un groupe</label>
				<select name="group">
					<?php foreach ($allGroup as $group) : ?>
					<option value="<?php echo $group['id']; ?>"><?php echo $group['name']; ?></option>
				<?php endforeach; ?>
			</select>

			<input type="hidden" name="MAX_FILE_SIZE" value="50000">
			<input type="submit" name="upload" class="btn btn-customize" value="Envoyer">
		</form>
	</div>

	<?php foreach ($allNews as $news) { ?>
	<div class="message">
		<div class="message-content">
			<?php

			$allImg = new news_imgModel();
			$images = $allImg->getOneBy($news->getId(), 'id_news');
			$url = $images['id_img'];

		

			echo '<img src="../public/images/news/' . $url . '" class="col-md-2 col-sm-6 col-xs-6">';
			$allUser = new userModel();
			$allUser->getAll(true);

			foreach($allUser as $aa){
				$author = $aa['lastname']." ".$aa['firstname'];
			}
			?>
			<p id="author"><?php echo $author; ?></p>	
			<h3><b><?php echo $news->getTitle(); ?></b></h3>
			<p><?php echo $news->getContent(); ?></p>
		</div>

		<!-- Comments section -->
		<section id="comments">
			<div class="comments-section">
				<h3>Derniers commentaires</h3>

				<?php
				// Afficher les derniers commentaires du post
				$allComments = new commentsModel();
				$allComments->getAll(true);

				$allCommentsAuthor = new userModel();
				$allCommentsAuthor->getAll(true);
				foreach($allCommentsAuthor as $commentAuthor) {
					$commentName = $commentAuthor['firstname'] . " " . $commentAuthor['lastname'];
				}

				?>
				<div class="comment">
				<?php foreach($allComments as $comment){
					if($comment['id_news']===$images['id_news']){ ?>
					<section class="hostel-response-informations">

						<p><?php echo $commentName; ?></p>
						<p><i class="fa fa-clock-o"></i> le 08.03.2016</p>
					</section>
					<section class="news-comment">
						
						<p><?php echo $comment['content']; ?></p>
						
					</section>
					<?php 
				}

			} ?>
		</div>
	</div>
	<form method="post" id="comment-form" action="/index/comment">
		<textarea type="post" placeholder="Votre commentaire..." name="comment" required></textarea>
		<input type="submit" value="Envoyer" />
	</form>
</section>
</div><!-- /.message -->
<?php } ?>
</div>
</div>

</div>