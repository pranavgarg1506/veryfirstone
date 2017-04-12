<?php
include "connect.php";
$id=$_POST['id'];
$pass=$_POST['pass'];
session_start();
$se=mysql_query("select * from master where uid='$id' and pass='$pass'");
if(mysql_fetch_array($se)){
	$check=mysql_query("select * from student_basic where uid='$id' and activ='Y'");
	$_SESSION['sid']=$id;
	}
else
 echo "wrong combination";	
?>