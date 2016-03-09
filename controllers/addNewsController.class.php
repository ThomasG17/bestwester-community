<?php

class addNewsController{
	public function indexAction($args){
		$v = new view("addNews");
		$v->assign("mesargs", $args);
	}

	public function insertAction($args){

		$title = $_POST['title'];
		$content = $_POST['content'];

		$newsObj = new newsModel(-1, $title, $content, 2);
		$newsObj->save();

		/*$newsObj = $db->prepare('INSERT INTO news(id, title, content, id_user) VALUES (2,"test","test",2)');
		$newsObj->execute();*/

	}
}