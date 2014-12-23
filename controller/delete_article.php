<?php 
	require'NewsController.php';
	
	$controller = new NewsController;
	$controller->action('Delete');
	header("Location:articles.php");
?>