<?php
include "connect.php";
$name=$_POST['name'];
$cn=$_POST['cn'];
$branch=$_POST['branch'];
$email=$_POST['email'];
$f_n=$_POST['f_n'];
$add=$_POST['add'];
$insert_master=mysql_query("insert into master set pass='$name',type='S',contact='$cn'") or die("insertion problem");
$select=mysql_query("select * from master where contact='$cn' and type='S' and pass='$name'") or die("prob");
$sel=mysql_fetch_array($select);
$uid=$sel['uid'];
$insert_stu=mysql_query("insert into student_basic set name='$name',branch='$branch',email='$email',contact='$cn',father_name='$f_n',address='$add',uid='$uid'") or die("cannot insert");
$insert=mysql_query("insert into attendance set uid='$uid'");
echo "insertion successful";
?>