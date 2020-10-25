<?php

class database {
	
	private static function connect() {
		$pdo = new PDO('mysql:host=IP:3306;dbname=DB_NAME;charset=utf8', 'root', 'PASSWORD');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
	}
	
	public static function query($query, $parametres = array()){
		$statement = self::connect()->prepare($query);
		$statement ->execute($parametres);

		if(explode(' ', $query)[0]== 'SELECT'){
			$data = $statement->fetchAll();
			return $data;	
		}
	}
}

?>
