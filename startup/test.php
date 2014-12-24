<?php
	require_once 'boot.php';

	//r = news/all
	$route = $_GET['r'];
	$routeParts = explode('/',$route);
	
	$controllerClassName = ucfirst($routeParts[0]).'Controller';
	
	$controller = new $controllerClassName;
	$controller->action($routeParts[1]);


/* echo __DIR__; возвращает путь от корневого каталога до текущего*/
