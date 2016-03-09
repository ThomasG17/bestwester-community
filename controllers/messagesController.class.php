<?php
class messagesController{

	public function indexAction($args){
		$v = new view("messages");
		$v->assign("mesargs", $args);
	}	
}