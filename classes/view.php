<?php 

class Storage implements Iterator{
		

		private $data=array();
						
		public function __set($key, $value){
			$this->data[$key] = $value;			
		}
		
		public function __get($key){
			return $this->data[$key];
		}
		
		public function current(){
			return current($this->data);
		}
		
		public function key(){
			return key($this->data);
		}
		
		public function next(){
			return next($this->data);
		}
		
		public function rewind(){
			return reset($this->data);
		}
		
		public function valid(){
			return key($this->data) !== null;
		}
				
	}

class View extends Storage{

	function __construct(){
		//echo "Объект создан.";
	}
		
		public function display($template){		
			foreach($this as $k=>$v){
				//echo $k.' - '.$v.'<br>';
				$$k = $v;	
			}		
			ob_start();
			include $template;
			$output = ob_get_clean();		
			return $output;	
		}
				
	}
	
/*	test
	$db = mysql_connect('localhost','root','3141');
	$con = mysql_select_db('dbarticles');
	
	$res = mysql_query('SELECT * FROM articles');
	if(!$res) echo mysql_error();
	$row = mysql_fetch_assoc($res);
	$row = mysql_fetch_assoc($res);
	$v = new View();
	$v->articles = mysql_fetch_assoc($res);
	$v->articles1 = mysql_fetch_assoc($res);
	$v->articles2 = mysql_fetch_assoc($res);
	foreach($v as $k=>$vr)
	echo $k.' - '.$vr.'<br>';
	echo $v->display('test3.php');
*/	
	
	
	
	
	
	
	
	
	
	
	