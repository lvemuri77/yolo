<?php
session_start();
include('config.php');
$u = $_POST['username'];
$p = $_POST['pwd'];

$query = "select `username` from `login` where `username`='$u' and `password`='$p'";
//echo $query; 
$execute = mysql_query($query);
$num_rows = mysql_num_rows($execute);
//die();
if($num_rows){
	$_SESSION['uname'] = $u;
	header('Location:index.php');
}else{
	die('error occured : '.mysql_error());
}

?>