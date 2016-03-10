<?php

class user_mailModel extends basesql {
  protected $id;
  protected $id_mail;
  protected $id_receiver;

  public function __construct($id=-1, $id_mail="", $id_receiver=""){

    parent::__construct();

    $this->setId($id);
    $this->setIdMail($id_mail);
    $this->setIdReceiver($id_receiver);
  }


  // SETTERS
  public function setId($id){
    if(!is_numeric($id)) die();
    $this->id = $id;
  }

  public function setIdMail($id_mail){
    $this->id_mail = trim($id_mail);
  }

  public function setIdReceiver($id_receiver){
    $this->id_receiver = trim($id_receiver);
  }


  // GETTERS
  public function getId(){
    return $this->id;
  }

  public function getIdMail(){
    return $this->id_mail;
  }

  public function getIdReceiver(){
    return $this->id_receiver;
  }

}