<?php

class news_imgModel extends basesql {

	protected $id;
	protected $id_news;
	protected $id_user;

	public function __construct($id=0, $id_news="", $id_user=""){
		parent::__construct();

		$this->setId($id);
		$this->setIdNews($id_news);
		$this->setIdUser($id_user);
	}


	// SETTERS
	public function setId($id){
		if(!is_numeric($id)) die();
		$this->id = $id;
	}

	public function setIdNews($id_news){
		$this->id_news = $id_news;
	}

	public function setIdUser($id_user){
		$this->id_user = $id_user;
	}


	// GETTERS
	public function getId(){
		return $this->id;
	}

	public function getIdNews(){
		return $this->id_news;
	}

	public function getIdUser(){
		return $this->id_user;
	}

}