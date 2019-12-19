<?php
include '../config.php';

session_start();

if($_SESSION['status'] !="login"){
	header("location:../index.php");
}

$id 		= mysql_real_escape_string ($_POST['id']);
$nama 		= mysql_real_escape_string ($_POST['nama']);
$username 	= mysql_real_escape_string ($_POST['username']);

$query = "UPDATE user SET nama='$nama', username='$username' where id='$id'";

mysql_query($query);
header("location:index.php?pesan=update"); 
?>