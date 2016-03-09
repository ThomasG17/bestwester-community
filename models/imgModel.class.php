<?php


class imgModel extends basesql {
	protected $id;
	protected $url;

	public function __construct($id=0, $url=''){
		parent::__construct();

		$this->setId($id);
		$this->setUrl($url);
	}


	// SETTERS
	public function setId($id){
		if(!is_numeric($id)) die();
		$this->id = $id;
	}

	public function setUrl($url){
		$this->url = $url;
	}


	// GETTERS
	public function getId(){
		return $this->id;
	}

	public function getUrl(){
		return $this->url;
	}

}