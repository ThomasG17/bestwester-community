<?php

class user_GroupModel extends basesql {
	protected $id;
	protected $id_user;
	protected $id_group;

	public function __construct($id=-1, $id_user="", $id_group=""){

		parent::__construct();

		$this->setId($id);
		$this->setIdUser($id_user);
		$this->setIdGroup($id_group);
	}


	// SETTERS
	public function setId($id){
		if(!is_numeric($id)) die();
		$this->id = $id;
	}

	public function setIdUser($id_user){
		$this->id_user = trim($id_user);
	}

	public function setIdGroup($id_group){
		$this->id_group = trim($id_group);
	}


	// GETTERS
	public function getId(){
		return $this->id;
	}

	public function getIdUser(){
		return $this->id_user;
	}

	public function getIdGroup(){
		return $this->id_group;
	}

}