<?php
class user extends model{
	


	public function __construct(){
		parent::__construct();
	}

	public function login($email, $password){
		$user = $this->getUserLogin($email, $password);

		if(!empty($user)){
			return $user;
		}else{
			return false;
		}
	}


}