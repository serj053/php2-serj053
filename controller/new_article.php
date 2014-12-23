<?php 
/*
	require'NewsController.php';
	$controller = new NewsController;

	$controller->actionNew();
*/


	require_once'../model/News.php';
	
	$title = isset($_POST['title'])?$_POST['title']:'';
	$content = isset($_POST['content'])?$_POST['content']:'';

	if($content != '' & $title !=''){

	$title = trim($title);
	$content = trim($content);
		$news = new News;		
		$row = $news->insert($title, $content);
		header("Location:articles.php");
	}else{
		// ?
		}
	
	
	include '../view/new_article.php';
	
?>