<?php 
	
	class DBConnect{
		//static  $dbh;

		static public function getConnection(){
            $dsn = 'mysql:dbname=dbarticles;host=localhost';
            return new Pdo($dsn, 'root','3141');
		}

		static public function query_by_id($id){
			$dbh = static::getConnection();
			$sth = $dbh->prepare('SELECT * FROM articles WHERE id_art=:id');
			$arr = array(':id'=>$id);
			$sth->execute($arr);
			return $sth->fetchAll(PDO::FETCH_CLASS);
		}

		static public function query_all(){
            $dbh = static::getConnection();
			$sth = $dbh->prepare('SELECT * FROM articles');
			$sth->execute();
			return $sth->fetchAll(PDO::FETCH_CLASS);
		}

	}
	
	//var_dump(DBConnect::query_by_id(4));

?>