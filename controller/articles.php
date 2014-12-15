<?php 
	require_once'../model/articles.php';
	$articles = articles_getAll();
	include '../view/articles.php';

?>