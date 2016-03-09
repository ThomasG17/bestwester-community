<?php
class indexController{

	public function indexAction($args){
		$v = new view("index");
		$v->assign("mesargs", $args);
	    if(!isset($_SESSION['login_user'])){ 
	    	header("location: user/login");
	    }
	}
}