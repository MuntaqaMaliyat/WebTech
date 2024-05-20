<?php 
function conn()
{
	$serverName="localhost";
    $userName="root";
    $pass="";
    $dbName="main_database";
    $conn=new mysqli($serverName,$userName,$pass,$dbName);
    return $conn;
}
?>
