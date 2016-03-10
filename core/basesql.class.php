<?php 
class basesql {

	private $pdo;
	private $connect = "mysql:host=localhost;dbname=hackaton";
	private $user_sql = "root";
	private $pwd_sql = "root";
	private $table;
	private $class;

	public function __construct(){
		$this->connect();
		//je récupère le nom de la classe enfant
		$this->class = get_called_class();
		//je supprime le suffixe "Model"
		$this->table = str_replace("Model", "", $this->class);
	}

	public function getNewsByIds($ids){
		$sql = 'SELECT id_news FROM news_group WHERE id_group = ';
		$i = count($ids);

		foreach ($ids as $id) {
			if ($i == 1){
				$sql = $sql . $id;
			}
			else {
				$sql = $sql . $id . ' OR id_group = ';
				$i--;
			}
		};
		$sql = $this->pdo->prepare($sql);
		$sql->execute();
		$data = $sql->fetchAll();
		return $data;

	}

	public function lastId(){
		$lastId = $this->pdo->lastInsertId();
		return $lastId;
	}

	//Fonction qui permet de se connecter à la base de donnée
	public function connect() {
		try{
			$this->pdo = new PDO($this->connect, $this->user_sql, $this->pwd_sql);
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(Exception $e) {
			die("Erreur SQL ".$e->getMessage());
		}
	}

	public function save(){

		//On récupère toutes les variables
		$all_vars = array_keys(get_object_vars($this));
		$pdo_vars = array_keys(get_class_vars(get_class()));
		$child_vars = array_diff($all_vars, $pdo_vars);
		//Via PDO je fais un prepare
		if(is_numeric($this->id) && $this->id>0)
		{
			// "Update";
			foreach ($child_vars as $var) {
				$array_to_execute[$var] = $this->$var;
				$set_sql[]= $var."=:".$var;
			}
			$sql = "UPDATE ".$this->table." SET ".implode(",", $set_sql)." WHERE id=:id;";
			$query = $this->pdo->prepare($sql);
			print_r($array_to_execute);
			$query->execute($array_to_execute);
		} else {
			// "Insert";
			unset($child_vars[0]);
			$sql = "INSERT INTO `".$this->table."`
					( " . implode(",", $child_vars) . ")
					VALUES ( :" . implode(",:", $child_vars) . ");";
					echo $sql;
			$query = $this->pdo->prepare($sql);

			foreach ($child_vars as $var) {
				$array_to_execute[$var] = $this->$var;
			}
			
			print_r($array_to_execute);
			$query->execute($array_to_execute);
		}
	}

	// cette fonction permet de mettre à jour l'état du concour active en état inactive (false)
	public function updateCurActive(){
		$all_vars = array_keys(get_object_vars($this));
		$pdo_vars = array_keys(get_class_vars(get_class()));
		$child_vars = array_diff($all_vars, $pdo_vars);

		foreach ($child_vars as $var) {
			$array_to_execute[$var] = $this->$var;
			$set_sql[]= $var."=:".$var;
		}

		$sql = "UPDATE ".$this->table." SET ".implode(",", $set_sql)." WHERE is_active=true;";
		$query = $this->pdo->prepare($sql);
		$query->execute($array_to_execute);
	}

	// La méthode countRow() retourne le nombre d'utilisateur enregistré dans la BDD
	public function countRow() {
		$sql = "SELECT count(*) FROM ".$this->table;
		$query = $this->pdo->prepare($sql);
		$query->execute();
		$data = $query->fetchColumn();
		return $data;
	}

	// Cette méthode retourne l'objet correspondant à l'ID passé en paramètre
	public function getOneBy($value, $column = "id"){
		$sql = "SELECT * FROM `".$this->table."` WHERE `".$column."`=:".$column." limit 1";
		$query = $this->pdo->prepare($sql);
		$query->execute([$column=>$value]);
		//On précise que dans le retour j'aurai un format [id=1, name=skrzypczyk] ....
		$query->setFetchMode(PDO::FETCH_ASSOC);
		//On retourne le résultat de la requête dans la variable data sous forme de tableau
		$data = $query->fetch();
		//On vérifie que le tableau n'est pas vide
		if(!empty($data))
		{
			//On alimente l'enfant
			foreach ($data as $propName => $propValue)
			{
				$this->$propName = $propValue;
			}
		}
		return $data;
	}

	// Cette méthode retourne les objets correspondant à l'ID passé en paramètre
	public function getAllBy($id, $column = 'id_user'){
		$sql = "SELECT * FROM `".$this->table."` WHERE `".$column."`=:".$column;
		$query = $this->pdo->prepare($sql);
		$query->execute([$column=>$id]);
		//On précise que dans le retour j'aurai un format [id=1, name=skrzypczyk] ....
		$query->setFetchMode(PDO::FETCH_ASSOC);
		//On retourne le résultat de la requête dans la variable data sous forme de tableau
		$data = $query->fetchAll();
		//On vérifie que le tableau n'est pas vide
		if(!empty($data))
		{
			//On alimente l'enfant
			foreach ($data as $propName => $propValue)
			{
				$this->$propName = $propValue;
			}
		}
		return $data;
	}

	// Cette méthode retourne les objets correspondant à l'ID passé en paramètre
	public function getAllBy2($id, $column = 'id_user'){
		$sql = "SELECT * FROM `".$this->table."` WHERE `".$column."`=:".$column;
		$query = $this->pdo->prepare($sql);
		$query->execute([$column=>$id]);
		//On précise que dans le retour j'aurai un format [id=1, name=skrzypczyk] ....
		$query->setFetchMode(PDO::FETCH_ASSOC);
		//On retourne le résultat de la requête dans la variable data sous forme de tableau
		$data = $query->fetch();
		//On vérifie que le tableau n'est pas vide
		if(!empty($data))
		{
			//On alimente l'enfant
			foreach ($data as $propName => $propValue)
			{
				$this->$propName = $propValue;
			}
		}
		return $data;
	}

	// Cette méthode retourne l'objet correspondant à l'id_member (de facebook) passé en paramètre
	public function getOneByIdmember($value, $column = "id_member"){
		$sql = "SELECT * FROM ".$this->table." WHERE ".$column."=:".$column." limit 1";
		$query = $this->pdo->prepare($sql);
		$query->execute([$column=>$value]);
		//On précise que dans le retour j'aurai un format [id=1, name=skrzypczyk] ....
		$query->setFetchMode(PDO::FETCH_ASSOC);
		//On retourne le résultat de la requête dans la variable data sous forme de tableau
		$data = $query->fetch();
		//On vérifie que le tableau n'est pas vide
		if(!empty($data))
		{
			//On alimente l'enfant
			foreach ($data as $propName => $propValue)
			{
			    $this->$propName = $propValue;
			}
		}
	}

	// cette méthode retourne l'ensemble des objets contenu de la table qui l'appel
	public function getAll($value){
		$sql = "SELECT * FROM `".$this->table."`";
		$query = $this->pdo->prepare($sql);
		$query->execute();
		$query->setFetchMode(PDO::FETCH_ASSOC);
		//On retourne le résultat de la requête dans la variable data sous forme de tableau
		$data = $query->fetchAll();
		//On vérifie que le tableau n'est pas vide
		if(!empty($data))
		{
			//On alimente l'enfant
			foreach ($data as $propName => $propValue)
			{
			    $this->$propName = $propValue;
			}
		}
		return ($data);
	}

	// cette méthode retourne le concours active 
	public function getOneByActive($value, $column = "is_active"){
		$sql =  "SELECT * FROM ".$this->table." WHERE ".$column."=:".$column;
		$query = $this->pdo->prepare($sql);
		$query->execute([$column=>$value]);
		//On précise que dans le retour j'aurai un format [id=1, name=skrzypczyk] ....
		$query->setFetchMode(PDO::FETCH_ASSOC);
		//On retourne le résultat de la requête dans la variable data sous forme de tableau
		$data = $query->fetch();
		//Je vérifie que le tableau n'est pas vide
		if(!empty($data))
		{
			//On alimente l'enfant
			foreach ($data as $propName => $propValue)
			{
			    $this->$propName = $propValue;
			}
		}
		
	}

	// Cette méthode permet de retourner le concours sélectionné
	public function getUserLogin($email, $password) {
		$sql =  "SELECT * FROM user WHERE mail = '".$email."' AND password = '".$password."'";
		$query = $this->pdo->prepare($sql);
		$query->execute();
		$data = $query->fetch();
		return $data;
	}

	// Sélection des 8 derniers utilisateurs inscrits => page d'accueil dashboard
	public function getUserByMail($mail) {
		$sql = "SELECT * FROM user WHERE mail = '".$mail."'";
		$query = $this->pdo->prepare($sql);
		$query->execute();
		$data = $query->fetchAll();
		return $data;
	}

	function redirect($url, $permanent = false)
	{
    	header('Location: ' . $url, true, $permanent ? 301 : 302);
    	exit();
	}
}