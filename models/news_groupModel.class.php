<?php

class news_groupModel extends basesql {
	protected $id;
	protected $id_news;
	protected $id_group;

	public function __construct($id=0, $id_news, $id_group){
		parent::__construct();

		$this->setId($id);
		$this->setIdNews($id_news);
		$this->setIdGroup($id_group);
	}


	// SETTERS
	public function setId($id){
		if(!is_numeric($id)) die();
		$this->id = $id;
	}

	public function setIdNews($id_news){
		$this->id_news = $id_news;
	}

	public function setIdGroup($id_group){
		$this->id_group = $id_group;
	}


	// GETTERS
	public function getId(){
		return $this->id;
	}

	public function getIdNews(){
		return $this->id_news;
	}

	public function getIdGroup(){
		return $this->id_group;
	}
}