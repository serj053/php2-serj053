<?php 
	
	class DBConnect{
		static protected $dbh;
		
		function __construct($db='dbarticles',$host='localhost'){			
			$dsn = 'mysql:dbname='.$db.';host='.$host;
			static::$dbh = new Pdo($dsn, 'root','3141');			
		}

		static public function query_by_id($id){
			$dsn = 'mysql:dbname=dbarticles;host=localhost';
			$dbh = new Pdo($dsn, 'root','3141');
			$sth = $dbh->prepare('SELECT * FROM articles WHERE id_art=:id');
			$arr = array(':id'=>$id);
			$sth->execute($arr);
			return $sth->fetchAll(PDO::FETCH_CLASS);
		}

		static public function query_all(){
			$dsn = 'mysql:dbname=dbarticles;host=localhost';
			$dbh = new Pdo($dsn, 'root','3141');
			$sth = $dbh->prepare('SELECT * FROM articles');
			$sth->execute();
			return $sth->fetchAll(PDO::FETCH_CLASS);
		}
		
		static public function query_update($id,$title,$content,$title){
			$dsn = 'mysql:dbname=dbarticles;host=localhost';
			$dbh = new Pdo($dsn, 'root','3141');
			$sth = $dbh->prepare('UPDATE '.static::$table.' SET title =:title
																	content=:content
																	WHERE  id=:id	');
			$arr = array('title'=>$title,'content'=>$content,'id'=>$id);														
			$sth->execute($arr);
			return $sth->fetchAll(PDO::FETCH_CLASS);
		}
		
		static public function query_insert($title,$content){
			$dsn = 'mysql:dbname=dbarticles;host=localhost';
			$dbh = new Pdo($dsn, 'root','3141');
			$sth = $dbh->prepare('INSERT INTO '.News::$table.
									'( title, content, created_date)
									  VOLUE(title=:title,content=:content,now()');
			$arr = array('title'=>$title,'content'=>$content);														
			$sth->execute($arr);
			return $sth->fetchAll(PDO::FETCH_CLASS);
		}
	
	}
	
	


?>