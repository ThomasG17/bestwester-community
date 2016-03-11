<?php

class userModel extends basesql {
	protected $id;
	protected $lastname;
	protected $firstname;
	protected $mail;
	protected $fonction;
	protected $is_admin;

	public function __construct($id=0, $lastname="", $firstname="", $mail="", $fonction="", $is_admin=0) {
		parent::__construct();

		$this->setId($id);
		$this->setLastName($lastname);
		$this->setFirstName($firstname);
		$this->setMail($mail);
		$this->setFonction($fonction);
		$this->setIsAdmin($is_admin);
	}


	// SETTERS
	public function setId($id){
		if(!is_numeric($id)) die();
		$this->id = $id;
	}

	public function setLastName($lastname){
		$this->lastname = $lastname;
	}

	public function setFirstName($firstname){
		$this->firstname = $firstname;
	}

	public function setMail($mail){
		$this->mail = $mail;
	}

	public function setFonction($fonction){
		$this->fonction = $fonction;
	}

	public function setIsAdmin($is_admin){
		$this->is_admin = $is_admin;
	}


	// GETTERS
	public function getId(){
		return $this->id;
	}

	public function getLastName(){
		return $this->lastname;
	}

	public function getFirstName(){
		return $this->firstname;
	}

	public function getMail(){
		return $this->mail;
	}

	public function getFonction(){
		return $this->fonction;
	}

	public function getIsAdmin(){
		return $this->is_admin;
	}

}