<?php
session_start();

require_once("config.inc.php");

$con=mysqli_connect($host, $user, $pass) or DIE('Connection to host is failed, perhaps the service is down!');

//mysqli_query("CREATE DATABASE test;");
//mysqli_query("USE test;");
//mysqli_query("CREATE TABLE users (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,username VARCHAR(30) NOT NULL,password CHAR(32) NOT NULL);");
//mysqli_query("INSERT INTO users (username, password) VALUES('user', MD5('user'));");

mysqli_select_db($con,$db_name) or DIE('Database name is not available!');

$username=mysqli_real_escape_string($con,$_POST["username"]);
$password=md5(mysqli_real_escape_string($con,$_POST["password"]));

$result=mysqli_query($con,"SELECT * FROM $tbl_name WHERE username='$username' and password='$password'");

if(mysqli_num_rows($result)==1)
{
	$_SESSION['username']=$username;
	header("Location: ./$username/");
}
else
{
	header('Location: index.php?login_attempt=1');
}

mysqli_close($con);
?>