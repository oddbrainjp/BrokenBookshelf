<?php
class DatabaseAccesser {

	public function dbStart(){
		try {
			$dbh = new PDO('mysql:host=localhost;dbname=BrokenBookshelf', 'sukesan', 'Kashikomari!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $dbh;
		} catch (PDOException $e) {
			echo $e->getMessage()."shit!";
			exit;
		}
	}

}