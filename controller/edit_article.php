<?php 
	require_once'../model/articles.php';
	$id_art = $_GET['id_art'];
		$row = article_getOne($id_art);
//print_r($_GET);		
//print_r($id_art);		

	if(isset($_POST['title']) && isset($_POST['content'])){
//echo $id_art;
		$res = up_date($_POST['title'], $_POST['content'], $id_art);
		print_r($res);	
		$row = article_getOne($id_art);
		//header("Location:edit_article.php?id_art=$id_art");
		//if($res == 0) die("Обновить не получилось");	
	}else{
		
	}

	include '../view/edit_article.php';
?>