<?php
class indexController extends basesql {

	public function indexAction($args){
		$v = new view("index");
		$v->assign("mesargs", $args);

	    if(!isset($_SESSION['login_user'])){ 
	      header("location: user/login");
	    }
	}

	public function insertAction($args){

		$title = trim($_POST['title']);
		$content = trim($_POST['content']);
		$id_group = $_POST['group'];


		$extensions = array('.png', '.jpg', '.jpeg', '.gif');
			// Récupère chaîne pour vérifier extension
		$extension = strrchr($_FILES['newsimg']['name'], '.');

		if(!in_array($extension, $extensions)) {
			echo "Vous devez uploader une image de type jpg, jpeg, png ou gif";
		}

		// Traitement image
		if(isset($_FILES['newsimg'])) {

			$dossier = "public/images/news/";
			$fichier = basename($_FILES['newsimg']['name']);
			if(move_uploaded_file($_FILES['newsimg']['tmp_name'], $dossier . $fichier)) {
				echo "fichier uploaded";
			} else {
				echo "Echec";
			}
		}


		//Enregistrer info actu
		$newsObj = new newsModel(-1, $title, $content, 2);
		$newsObj->save();

		//Récupérer dernière actu créée
		$lastNews = $newsObj->lastId();

		//Enregistrer l'image de l'actu
		$imgObj = new imgModel(-1,$fichier);
		$imgObj->save();

		$imgObj = new news_imgModel(-1, $lastNews, $fichier);
		$imgObj->save();


		//Lier l'actu au groupe
		$groupObj = new news_groupModel(-1, $lastNews, $id_group);
		$groupObj->save();

		header('Location: /index');
	}	



	public function commentAction($args){
		$content = trim($_POST['comment']);
		$id_user = $_SESSION['login_user']['id'];

		$commentObj = new commentsModel(-1, $content, $id_user, 80);
		$commentObj->save();
	}

	public function researchAction($args){
		$research = $_POST['research'];
		$bdd = mysqli_connect("localhost", "root", "", "hackathon");
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }


		$sql = "SELECT * FROM user, news n, comments c WHERE (title = $research) OR (c.content = $research) or (n.content = $research)";
		var_dump($sql);

		mysqli_query($bdd ,$sql) or die('SQL Error');

	}

}	