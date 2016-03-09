<?php
class hostelsController{

	public function indexAction($args){
		$v = new view("hostels");
		$v->assign("mesargs", $args);
	}	
}