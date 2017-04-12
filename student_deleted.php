<?php
include "connect.php";
$id=$_POST['id'];
$name=$_POST['name'];
	$date=date("y-m-d");
	$del=mysql_query("update student_basic set activ='N',custom_date='$date' where id='$id' and name='$name'") or die("don't exist");
	echo "deleted successfully";
?>