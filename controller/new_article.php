<?php 
	require_once'../model/articles.php';
	
	$title = isset($_POST['title'])?$_POST['title']:'';
	$content = isset($_POST['content'])?$_POST['content']:'';
	
	if($content != '' & $title !=''){
	$title = trim($title);
	$content = trim($content);
	
		$id_art = new_article($title,$content);
		
		$row = article_getOne($id_art);
		header("Location:articles.php");
	}else{
		
		}
	
	
	include '../view/new_article.php';
?>