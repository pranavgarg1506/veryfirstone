<?php
include "connect.php";
$id=$_POST['id'];
$name=$_POST['name'];
$fn=$_POST['f_n'];
$cn=$_POST['cn'];
$email=$_POST['email'];
$add=$_POST['add'];
$up=mysql_query("update student_basic set name='$name',father_name='$fn',contact='$cn',email='$email',address='$add' where id='$id' and activ='Y'") or die("cannot update");
?>