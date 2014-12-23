<?php 

require '../startup/db.php';
interface Articles{
				
		public function get_All();
		public function get_One($id_art);
		public function insert($title, $content);
		public function update($id_art,$title, $content);
		public function delete($id_art);
		
	}


	class News implements Articles{
		
		function get_All(){
			$db = new DB();
		return $db->select_all("SELECT * FROM articles");
		}
		
		function get_One($id_art){
			$db = new DB();
		return $db->select_one("SELECT * FROM articles WHERE id_art = '$id_art'");
		}
		
		function insert($title, $content){
			$db = new DB();
		return $db->insert("INSERT INTO articles ( title, content, created_date)
					VALUES('$title','$content', now())");
		}
		
		function update($id_art,$title, $content){
			$db = new DB();
		return $db->update("UPDATE articles SET title = '$title',
		content = '$content' WHERE id_art = '$id_art'");
		}
		
		function delete($id_art){
			$db = new DB();
		return $db->delete("DELETE FROM articles WHERE id_art = '$id_art'");
		}	
						
	}

?>