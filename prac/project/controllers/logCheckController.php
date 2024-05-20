<?php
require_once('../models/alldb.php');
session_start();

$username=$_POST['username'];
$pass=$_POST['pass'];

$status=auth($username,$pass);

if($status)
{
	$_SESSION['username']=$username;
	header("location:../views/php/dashboard.php");
}
else
{
	header("location:../views/php/logIn.php");
	$_SESSION['mess']="Your username or password is invalid!";
}
?>