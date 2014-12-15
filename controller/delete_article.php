<?php 
	require_once'../model/articles.php';
	
		$id_art = $_GET['id_art'];
		$del = delete_article($id_art);

		header("Location:articles.php");		
	
	include '../view/articles.php';

?>