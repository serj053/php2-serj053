<?php 

	function DBConnect(){
		//date_default_timezone_set( 'Europe/Moscow' ) ;
		 $config =parse_ini_file('../config_db.txt');
		 $dbName = $config['dbName'];
		 $res = mysql_connect(
							  $config['host'],
                              $config['user'],
							  $config['password']) or die('No connect with data base'); 
							  
		if(!$res) die (mysql_error());					  
	
	mysql_query('SET NAMES utf8');
	mysql_select_db($dbName) or die('No data base');
	}
	
	function DBSelect($sql){
		//DBConnect();
		$res = mysql_query($sql);
		if(!$res) echo mysql_error();
		
		$ret =array();
		while($row = mysql_fetch_assoc($res)){
			$ret[] = $row;
		}
			return $ret;
	}
	
	function DBInsert($sql){
		$res = mysql_query($sql);
		if(!$res) echo mysql_error();		
			return mysql_insert_id();
	}
	
	function DBUpdate($sql){
		$res = mysql_query($sql);
		if(!$res) echo mysql_error();
		return mysql_affected_rows();
	}
	
	function DELarticle($sql){
		$res = mysql_query($sql);
		if(!$res) echo mysql_error();
		return mysql_affected_rows();
	}
	


?>