<?php

class userModel extends basesql {
	protected $id;
	protected $lastname;
	protected $firstname;
	protected $mail;
	protected $fonction;
	protected $is_admin;
	protected $id_group;
	protected $password;


	public function __construct($id=-1, $lastname="", $firstname="", $mail="", $fonction="", $is_admin="", $id_group="", $password=""){

		parent::__construct();

		$this->setId($id);
		$this->setLastname($lastname);
		$this->setFirstname($firstname);
		$this->setMail($mail);
		$this->setFonction($fonction);
		$this->setIs_Admin($is_admin);
		$this->setId_Group($id_group);
		$this->setPassword($password);
	}


	// SETTERS
	public function setId($id){
		if(!is_numeric($id)) die();
		$this->id = $id;
	}

	public function setLastname($lastname){
		$this->id_user = trim($lastname);
	}

	public function setFirstname($firstname){
		$this->id_group = trim($firstname);
	}
	public function setMail($mail){
		$this->mail = trim($mail);
	}
	public function setFonction($fonction){
		$this->fonction = trim($fonction);
	}
	public function setIs_Admin($is_admin){
		$this->is_admin = trim($is_admin);
	}
	public function setId_Group($id_group){
		$this->id_group = trim($id_group);
	}
	public function setPassword($password){
		$this->password = trim($password);
	}


	// GETTERS
	public function getId(){
		return $this->id;
	}

	public function getLastname(){
		return $this->lastname;
	}

	public function getFirstname(){
		return $this->firstname;
	}
	public function getMail(){
		return $this->mail;
	}
	public function getFonction(){
		return $this->fonction;
	}
	public function getIs_Admin(){
		return $this->is_admin;
	}
	public function getId_Group(){
		return $this->id_group;
	}
	public function getPassword(){
		return $this->password;
	}

}