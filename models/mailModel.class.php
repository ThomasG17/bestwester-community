<?php


class mailModel extends basesql {

  protected $id;
  protected $title;
  protected $content;
  protected $id_sender;

  public function __construct($id=0, $title="", $content="", $id_sender=""){
    parent::__construct();

    $this->setId($id);
    $this->setTitle($title);
    $this->setContent($content);
    $this->setIdSender($id_sender);
  }


  // SETTERS
  public function setId($id){
    if(!is_numeric($id)) die();
    $this->id = $id;
  }

  public function setTitle($title){
    $this->title = $title;
  }

  public function setContent($content){
    $this->content = $content;
  }

  public function setIdSender($id_sender){
    $this->id_sender = $id_sender;
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

  public function getIdSender(){
    return $this->id_sender;
  }
}