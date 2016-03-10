<?php
class planningController{

	public function indexAction($args){
		$v = new view("planning");
		$v->assign("mesargs", $args);
	}	
}