<?php
include("conn.php");
$cid=$_GET['cid'];
$tname=$_POST['tname'];
$SQL = "use dynamic_website";
$result = mysql_query($SQL);

$SQL = "create table ".$tname."(qid int not null auto_increment, question varchar(500) not null, option1 varchar(100) not null, option2 varchar(100) not null, option3 varchar(100) not null, option4 varchar(100) not null, answer varchar(100) not null,primary key (qid))";
$result = mysql_query($SQL) or die(mysql_error());

$SQL = "select max(tid) FROM tests";
$result = mysql_query($SQL);
$row=mysql_fetch_array($result);
$tid=$row[0]+1;
$query="insert into tests(tid,tname) values('$tid','$tname')";
$result = mysql_query($query) or die(mysql_error());
echo "<script type='text/javascript'> window.location.href='test.php?cid=".$cid."'</script>";
?>