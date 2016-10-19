<?php

    // connection settings

    $connection = mysql_connect('166.62.28.132:3306', 'gaadibaba','GaadiBaba@123');

    // $connection = mysql_connect('localhost', 'root', '');
         
	if(!$connection){
	    die("Database Connection Failed" . mysql_error());
	}
       
    $select_db = mysql_select_db('gb_main');
    
    if(!$select_db){
	    die("Database Selection Failed" . mysql_error());
	}	

?>