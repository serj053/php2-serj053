<?php 
	require_once'../model/articles.php';
	
		$id_art = $_GET['id_art'];
		$art = new News;
		$del = $art->delete($id_art);
		header("Location:articles.php");		

?>