<?php 
	require_once'../model/articles.php';
	require_once'../classes/view.php';
	$news = new News;
	$view = new View;
	$view->articles = $news->get_all();
	echo $view->display('../view/articles.php');

?>