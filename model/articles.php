<?php 
/**/
	include'../startup/db.php';
	
	function articles_getAll(){
		DBConnect();
		return DBSelect("SELECT * FROM articles");
	}
	
	function article_getOne($id_art){
		DBConnect();
		return DBSelect("SELECT * FROM articles WHERE id_art = $id_art");
	}
	
	function new_article($title, $content, $id_user=1){
		$title = trim($title);
		$content = trim($content);
		DBConnect();
		$query = "INSERT INTO articles (id_user,title,content,created_date) 
									VALUES('$id_user','%s','%s', now())";
									
		$query = sprintf($query, mysql_real_escape_string($title),
								 mysql_real_escape_string($content));	
								 
			$res = DBInsert($query);
			 return $res;		
	}
	
	function up_date($title, $content, $id_art){
		$title = trim($title);
		$content = trim($content);

		DBConnect();
		$query = "UPDATE articles SET title = '$title',
									  content ='$content'
						WHERE id_art = '$id_art'";

		return 	DBUpdate($query);	;
	}
	
	function delete_article($id_art){
		DBConnect();
		
		$query="DELETE FROM articles WHERE id_art = '$id_art'";
		return 	DELarticle($query);
		
	}
	
	
	
	
	
	
	
	

?>