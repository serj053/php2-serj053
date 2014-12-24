<?php 
	
	function __autoload($class){
	//is_readable('string')
		switch($class){
			case 'News':require'../model/News.php';
			break;	
			case 'View':require'../classes/View.php';
			break;
			case 'NewsController':require'../controller/NewsController.php';
			break;
				
		}		
	}

?>