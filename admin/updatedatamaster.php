<?php
include '../config.php';

session_start();

if($_SESSION['status'] !="login"){
	header("location:../index.php");
}

$EmployeeNo = mysql_real_escape_string ($_POST['EmployeeNo']);
$FullName = mysql_real_escape_string ($_POST['FullName']);
$BirhtPlace = mysql_real_escape_string ($_POST['BirhtPlace']);
$BirthDate  = mysql_real_escape_string ($_POST['BirthDate']);
$phpdate = strtotime( $BirthDate );
$BirthDate = date( 'Y-m-d H:i:s', $phpdate );
$Gender = mysql_real_escape_string ($_POST['Gender']);
$MaritalStatus = mysql_real_escape_string ($_POST['MaritalStatus']);
$NationalityCode = mysql_real_escape_string ($_POST['NationalityCode']);  
$PersonalEmail = mysql_real_escape_string ($_POST['PersonalEmail']);
$Note = mysql_real_escape_string ($_POST['Note']);

$cekdata= "select * from employeemaster where EmployeeNo='$EmployeeNo'";
$prosescek= mysql_query($cekdata);
if (mysql_num_rows($prosescek)>0) {
	$query = "UPDATE employeemaster SET EmployeeNo='$EmployeeNo', FullName='$FullName', BirhtPlace='$BirhtPlace' ,BirthDate='$BirthDate', Gender='$Gender', MaritalStatus='$MaritalStatus', NationalityCode='$NationalityCode', PersonalEmail='$PersonalEmail', Note='$Note' where EmployeeNo='$EmployeeNo'";
	mysql_query($query);
}
else {	
	echo "<script>alert('EmployeeNo Sudah Digunakan');history.go(-1) </script>";			 
}
header("location:ui.php?pesan=update"); 
?>