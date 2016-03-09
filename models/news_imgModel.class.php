<?php

class news_imgModel extends basesql {

	protected $id;
	protected $id_news;
	protected $id_img;

	public function __construct($id=0, $id_news="", $id_img=""){
		parent::__construct();

		$this->setId($id);
		$this->setIdNews($id_news);
		$this->setIdImg($id_img);
	}


	// SETTERS
	public function setId($id){
		if(!is_numeric($id)) die();
		$this->id = $id;
	}

	public function setIdNews($id_news){
		$this->id_news = $id_news;
	}

	public function setIdImg($id_img){
		$this->id_img = $id_img;
	}


	// GETTERS
	public function getId(){
		return $this->id;
	}

	public function getIdNews(){
		return $this->id_news;
	}

	public function getIdImg(){
		return $this->id_img;
	}

}