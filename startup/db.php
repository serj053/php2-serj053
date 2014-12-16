<?php 

class DB{
	
/*
DB->select_all($sql);
DB->select_one($sql);
DB->insert($sql);
DB->update($sql);
DB->delete($sql);
*/	
	public static $db_link = null;
	
		function __construct( $config = 'config_db.txt'){
			
		
			if(DB::$db_link == null){
			 $config = parse_ini_file('../'.$config);
			 $dbName = $config['dbName'];
			 $this->db_link = mysql_connect(
								  $config['host'],
								  $config['user'],
								  $config['password']) or die('No connect with data base'); 
								  
			if(!$this->db_link) die (mysql_error());					  
			
			mysql_query('SET NAMES utf8');
			mysql_select_db($dbName) or die('No data base');
			}
		}
	
	
	
	function select_all($sql){
		$res = mysql_query($sql);
		if(!$res) echo mysql_error();
		
		$ret =array();
		while($row = mysql_fetch_assoc($res)){
			$ret[] = $row;
		}
			return $ret;
	}
	
	function select_one($sql){
		$res = mysql_query($sql);
		if(!$res) echo mysql_error();
		$row = mysql_fetch_assoc($res);		
			return $row;
	}
	
	function insert($sql){
		$res = mysql_query($sql);
		if(!$res) echo mysql_error();		
			return mysql_insert_id();
	}
	
	function update($sql){
		$res = mysql_query($sql);
		if(!$res) echo mysql_error();
		return mysql_affected_rows();
	}
	
	function delete($sql){
		$res = mysql_query($sql);
		if(!$res) echo mysql_error();
		return mysql_affected_rows();
	}
	
}

?>