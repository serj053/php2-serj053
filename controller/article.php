<?php 
	require_once'../model/articles.php';
	
	$id_art = $_GET['id_art'];

	$article = article_getOne($id_art);
	//print_r($article);
	include '../view/article.php';

?>