<?php
session_start();
$id=$_POST["id"];
$pass=$_POST["pass"];
include "connect.php";
$z=mysql_query("select * from master where uid='$id' and pass='$pass' and type='T'") or die("query problem");
if($n=mysql_fetch_array($z)){
	$check=mysql_query("select * from teacher where uid='$id' and activ='Y'");
	if(mysql_fetch_array($check))
	 $_SESSION['id']=$id;
	}
else
echo "wrong pass";	
?>