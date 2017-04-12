<?php
include "connect.php";
session_start();
$uid=$_SESSION['sid'];
$ol=$_POST['oldpass'];
$np=$_POST['newpass'];
$se=mysql_query("select * from master where uid='$uid'and pass='$ol' and type='S'");
if(mysql_fetch_array($se)){
	$change=mysql_query("update master set pass='$np' where uid='$uid' and pass='$ol'") or die("problem");
	}
?>