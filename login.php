<?php 
include 'config.php';
 
$username = mysql_real_escape_string ($_POST['username']);
$password = mysql_real_escape_string (md5($_POST['password']));
 
$login = mysql_query("select * from user where username='$username' and password='$password'");
$cek = mysql_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['id'] = $login['nama'];
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/index.php");
}else{
	header("location:index.php");	
}
 
?>