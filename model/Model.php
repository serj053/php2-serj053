<?php 
	abstract class Model{
	
		static protected $table;
				
		static function getTableName(){			
			return static::$table;
		}
		
	}

?>