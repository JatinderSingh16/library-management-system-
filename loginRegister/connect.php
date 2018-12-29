<?php

$db="lms";
$localhost="localhost";
$username="root";
$password="";
$db='lms';
define('SITE_PATH','http://localhost/lms');
$conn=mysqli_connect($localhost,$username,$password,$db);

if(!$conn){

	die('connection error'.mysqli_connect_error());
}

?>