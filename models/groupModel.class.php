<?php

class groupModel extends basesql {
	protected $id;
	protected $name;

	public function __construct($id=-1, $name=''){

		parent::__construct();

		$this->setId($id);
		$this->setName($name);
	}


	// SETTERS
	public function setId($id){
		if(!is_numeric($id)) die();
		$this->id = $id;
	}

	public function setName($name){
		$this->name = trim($name);
	}

	// GETTERS
	public function getId(){
		return $this->id;
	}

	public function getName(){
		return $this->name;
	}


}