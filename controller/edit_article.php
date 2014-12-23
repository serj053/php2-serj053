<?php 
	require_once'../model/articles.php';
	$id_art = $_GET['id_art'];
		$art = new News;
		$row = $art->get_One($id_art);
	if(isset($_POST['title']) && isset($_POST['content'])){
		$res =$art->update($id_art,  $_POST['title'], $_POST['content']);		
		$row =$art->get_One($id_art);	
	}else{
		// ?
	}

	include '../view/edit_article.php';
?>