<?php

class newsController {
	public function indexAction($args) {
		$v = new view("news");
		$v->assign('mesargs', $args);
	}
}