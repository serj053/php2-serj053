<?php 
	require_once'../model/articles.php';
	
	$title = isset($_POST['title'])?$_POST['title']:'';
	$content = isset($_POST['content'])?$_POST['content']:'';
//echo'\$title = '.$title.'\$content = '.$content;		
	if($content != '' & $title !=''){

	$title = trim($title);
	$content = trim($content);
		$news = new News;	
	
		$row = $news->insert($title, $content);
		header("Location:articles.php");
	}else{
		
		}
	
	
	include '../view/new_article.php';
?>