<?php
session_start();
include('config.php');

$pname=$_POST['p_name'];
$ptype=$_POST['p_type'];
$page=$_POST['p_age'];
$pdescription=$_POST['p_description'];
$pfee=$_POST['p_fee'];

$profilepic=$_FILES['image']['name'];

$ptemp=$_FILES['image']['tmp_name'];
$path="pet_pics/";
$spath=$path.$profilepic;
if($spath){
    move_uploaded_file($ptemp,$spath);
}

if(isset($_SESSION['uname'])){
  
$query = "INSERT INTO pets VALUES (NULL,'$pname','$ptype','$page','$pdescription','$pfee','$spath')";
//executes sql queries
$execute = mysql_query($query);


    if($execute){
        header('Location:getpets.php');
    }
}


else{
    $message = "Please Login to enter your details";
    $_SESSION['message'] = $message;
    header('Location:index.php');
    
	die();
    
}

?>

