<?php
include "connect.php";
session_start();
$tid=$_SESSION['id'];
$tsele=mysql_query("select * from teacher where uid='$tid'") or die("cannot select teacher");
$tinfo=mysql_fetch_array($tsele);
$tbr=$tinfo['branch'];
$tsub=$_POST['sub'];
$stusele=mysql_query("select * from student_basic where branch='$tbr'") or die("cannot select student");
while($stuinfo=mysql_fetch_array($stusele)){
	$stuuid=$stuinfo['uid'];
	$pa=$_POST[$stuuid];
	if($tsub=="math"){
		$stuatse=mysql_query("select * from attendance where uid='$stuuid'") or die("cannot select attendane");
		$stuatinfo=mysql_fetch_array($stuatse);
		$stuam=$stuatinfo['math'];
		$date=date('y-m-d');
		$tstuam=$stuatinfo['totalmathclass'];
		$tstuam++;
		$stuam=$stuam+$pa;
		$upat=mysql_query("update attendance set math='$stuam',totalmathclass='$tstuam' where uid='$stuuid'") or die("can't update");
		  if($pa==1){
		   mysql_query("insert into attendedclasses set uid='$stuuid',sub='math',date='$date',status='P'");
		    }
		    else{
				mysql_query("insert into attendedclasses set uid='$stuuid',sub='math',date='$date',status='A'");
				}
		}
	 if($tsub=="science"){
		$stuatse=mysql_query("select * from attendance where uid='$stuuid'") or die("cannot select attendane");
		$stuatinfo=mysql_fetch_array($stuatse);
		$stuas=$stuatinfo['science'];
		$tstuas=$stuatinfo['totalscienceclass'];
		$tstuas++;
		$stuas=$stuas+$pa;
		$upat=mysql_query("update attendance set science='$stuas',totalscienceclass='$tstuas' where uid='$stuuid'") or die("cant update");
		if($pa==1){
		   mysql_query("insert into attendedclasses set uid='$stuuid',sub='science',date='$date',status='P'");
		    }
		    else{
				mysql_query("insert into attendedclasses set uid='$stuuid',sub='science',date='$date',status='A'");
				}
		}
	 if($tsub=="eng"){
		$stuatse=mysql_query("select * from attendance where uid='$stuuid'") or die("cannot select attendane");
		$stuatinfo=mysql_fetch_array($stuatse);
		$tstuae=$stuatinfo['totalengclass'];
		$tstuae++;
		$stua=$stuatinfo['eng'];
		$stuam=$stuae+$pa;
		$upat=mysql_query("update attendance set eng='$stuae',totalengclass='$tstuae' where uid='$stuuid'") or die("cant update");
		if($pa==1){
		   mysql_query("insert into attendedclasses set uid='$stuuid',sub='eng',date='$date',status='P'");
		    }
		    else{
				mysql_query("insert into attendedclasses set uid='$stuuid',sub='eng',date='$date',status='A'");
				}
		}	
	}
?>