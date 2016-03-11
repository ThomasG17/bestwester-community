<?php
class hostelsController{

	public function indexAction($args){
		$this->mapAction($args);
	}

	public function mapAction($args){
		$v = new view("hostels");
    	$v->assign("mesargs", $args);
	}

	public function directoryAction($args){
    	$v = new view("directory");
    	$v->assign("mesargs", $args);
  	}	
}