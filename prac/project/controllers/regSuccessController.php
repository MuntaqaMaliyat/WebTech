<?php
require_once('../models/alldb.php');
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$r_password=$_POST['r_password'];

if($password==$r_password)
{
	addUserToStatus($username);
	$status=addUser($username, $password);

	if($status)
	{
		$_SESSION['username']=$username;
		header("location:../views/php/logIn.php");
	}
}
else
{
	header("location:../views/php/registration.php");
	$_SESSION['mess1']="Password and Retyped password are missmatched!";
}