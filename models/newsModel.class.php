<?php

class newsModel extends basesql {
	protected $id;
	protected $title;
	protected $content;
	protected $id_user;

	public function __construct($id=0, $title="", $content="", $id_user=""){

		parent::__construct();

		$this->setId($id);
		$this->setTitle($title);
		$this->setContent($content);
		$this->setIdUser($id_user);
	}


	// SETTERS
	public function setId($id){
		if(!is_numeric($id)) die();
		$this->id = $id;
	}

	public function setTitle($title){
		$this->title = trim($title);
	}

	public function setContent($content){
		$this->content = trim($content);
	}

	public function setIdUser($id_user){
		$this->id_user = $id_user;
	}


	// GETTERS
	public function getId(){
		return $this->id;
	}

	public function getTitle(){
		return $this->title;
	}

	public function getContent(){
		return $this->content;
	}

	public function getIdUser(){
		return $this->id_user;
	}

}