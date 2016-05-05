<?php
include('config.php');

$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$uname = $_POST["username"];
//$pwd = md5($_POST["pwd"]); //encrypt
$pwd = $_POST["pwd"]; //encrypt
$email = $_POST["email"];
$phone = $_POST["contact"];
$city=$_POST["city"];
$state=$_POST["state"];
$zip=$_POST["zipcode"];



$q = "INSERT INTO `users` VALUES (NULL,'$fname','$lname','$uname','$pwd','$email','$phone','$city','$state','$zip')";
//executes sql queries
$eqr = mysql_query($q);

if(!$eqr){
	die('Could Not Enter Data: '.mysql_error());
}
else{
	//echo 'Record Inserted Successfully!';
	$ql = "INSERT INTO `login` VALUES (NULL,'$uname','$pwd','$email')";
	$eql = mysql_query($ql);
	if($eql){
		header('Location:login.php'); // redirect
	}else{
		die('error while inserting data into login: '.mysql_error());
	}
}
//conntection close
mysql_close($con);
?>

