<?php 
	
	function __autoload($class){
		switch($class){
			case 'News':require'../model/News.php';
			break;	
			case 'View':require'../classes/View.php';
			break;
				
		}		
	}

?>