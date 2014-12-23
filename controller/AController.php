<?php 
abstract class AController {
	
	public function action($name){	
		$actionName = 'action'.ucfirst($name);
		if(method_exists($this,$actionName)){
			$this->$actionName();
		}
		
	}
	
}