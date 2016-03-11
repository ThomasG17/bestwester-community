<?php

class commentsModel extends basesql {

	protected $id;
	protected $content;
	protected $id_user;
	protected $id_news;

	public function __construct($id=0, $content="", $id_user="", $id_news="") {

		parent::__construct();

		$this->setId($id);
		$this->setContent($content);
		$this->setIdUser($id_user);
		$this->setIdNews($id_news);
	}

	// SETTERS
	public function setId($id) {
		if(!is_numeric($id)) die();
		$this->id = $id;
	}

	public function setContent($content){
		$this->content = $content;
	}

	public function setIdUser($id_user){
		$this->id_user = $id_user;
	}

	public function setIdNews($id_news){
		$this->id_news = $id_news;
	}


	// GETTERS
	public function getId(){
		return $this->id;
	}

	public function getContent(){
		return $this->content;
	}

	public function getIdUser(){
		return $this->id_user;
	}

	public function getIdNews(){
		return $this->id_news;
	}
}