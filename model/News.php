<?php 
	require'Model.php';
	require'DBConnect.php';
	
	class News extends Model{
		static  $table = 'articles';
		
		static public function findAll(){
			return DBConnect::query_all();
		}
		
		static public function findByPk($id){
			return DBConnect::query_by_id($id);
		}
		
		public function update($id,$title,$content){
			return DBConnect::query_update($id,$title,$content,$title);
		}
		
		public function insert($title,$content){
			return DBConnect::query_insert($title,$content);
		}
	}
	
    //$t = News::findByPk(4);
	//print_r($t);

?>