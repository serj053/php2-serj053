<?php 
/**/
	include'../startup/db.php';
	
	function articles_getAll(){
		$db = new DB();
		return $db->select_all("SELECT * FROM articles");
	}
	
	function article_getOne($id_art){
		$db = new DB();
		return $db->select_one("SELECT * FROM articles WHERE id_art = $id_art");
	}
	
	function new_article($title, $content, $id_user=1){
		$title = trim($title);
		$content = trim($content);
		$db = new DB();
		$query = "INSERT INTO articles (id_user,title,content,created_date) 
									VALUES('$id_user','%s','%s', now())";
									
		$query = sprintf($query, mysql_real_escape_string($title),
								 mysql_real_escape_string($content));	
								 
			
			 return $db->insert($query);		
	}
	
	function up_date($title, $content, $id_art){
		$title = trim($title);
		$content = trim($content);

		$db = new DB();
		$query = "UPDATE articles SET title = '$title',
									  content ='$content'
						WHERE id_art = '$id_art'";

		return 	$db->update($query);	;
	}
	
	function delete_article($id_art){
		$db = new DB();
		
		$query="DELETE FROM articles WHERE id_art = '$id_art'";
		return $db->delete($query);		
	}
	
	
	
	
	
	
	
	

?>