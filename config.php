<?php

$hostname = "localhost";
$username = "root";
$password = "";

$con = mysql_connect($hostname,$username,$password); // connection

if(!$con){
	die('could not connect: '.mysql_error());
}

$dbselect = mysql_select_db('yolo');
if(!$dbselect){	
	die('error in selection of db failed : '.mysql_error());
}

?>