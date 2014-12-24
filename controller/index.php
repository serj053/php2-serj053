<?php 
	require'NewsController.php';
	// РОУТЕР
	$route = isset($_GET['r'])?$_GET['r']:'';

	if($route!= ''){
	$routeParts = explode('/',$route);
	$controllerClassName = ucfirst($routeParts[0]).'Controller';
	$actionName = $routeParts[1];
	//ФРОНТ КОНТРОЛЛЕР
	$controller = new $controllerClassName;
	$controller->action($actionName);
	}else{
	include '../view/index.php';
	}

?>