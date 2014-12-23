<?php 

	interface Articles{
				
		public function get_All();
		public function get_One($id_art);
		public function insert($title, $content);
		public function update($id_art,$title, $content);
		public function delete($id_art);
		
	}

?>	