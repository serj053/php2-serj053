<?php 
	require_once'../model/articles.php';
	require_once'../classes/view.php';
	$id_art = $_GET['id_art'];
	$news = new News;
	$view = new View;
	$view->article = $news->get_One($id_art);
	echo $view->display('../view/article.php');

?>