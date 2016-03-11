<?php

class hotelModel extends basesql {

  protected $id;
  protected $name;
  protected $address;
  protected $phone;
  protected $city;
  protected $area;
  protected $country;

  public function __construct($id=0, $name="", $address="", $phone="", $city="", $area="", $country="") {
    parent::__construct();

    $this->setId($id);
    $this->setName($name);
    $this->setAdress($address);
    $this->setPhone($phone);
    $this->setCity($city);
    $this->setArea($area);
    $this->setCountry($country);
  }


  // SETTERS
  public function setId($id){
    if(!is_numeric($id)) die();
    $this->id = $id;
  }

  public function setName($title){
    $this->name = $name;
  }

  public function setAddress($address){
    $this->address = $address;
  }

  public function setPhone($phone){
    $this->phone = $phone;
  }

  public function setCity($city){
    $this->city = $city;
  }

  public function setArea($area){
    $this->area = $area;
  }

  public function setCountry($country){
    $this->country = $country;
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