<?php 
	require'Model.php';

	
	class News extends Model{
		static protected  $table = 'articles';
		static protected $columns = array('title','content');

      public function newArticle(){
          $this->save();
      }

      public function updateArticle(){
         // echo '<br>id_srt = '.($id_art);
          $this->save();
      }

      public function getAllArticles(){
          return News::findAll();
      }

      public function getOneArticle($id){
          return News::findByPk($id);
      }

	}


?>