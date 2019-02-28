<?php
include("conn.php");
$cid=$_GET['cid'];
$tname=$_POST['tname'];
$question=$_POST['q'];
$op1=$_POST['op1'];
$op2=$_POST['op2'];
$op3=$_POST['op3'];
$op4=$_POST['op4'];
$ans=$_POST['ans'];
$SQL = "use dynamic_website";
$result = mysql_query($SQL);

$SQL = "select max(qid) FROM ".$tname;
$result = mysql_query($SQL);
$row=mysql_fetch_array($result);
$qid=$row[0]+1;


$query="insert into ".$tname."(qid,question,option1,option2,option3,option4,answer) values('$qid','$question','$op1','$op2','$op3','$op4','$ans')";
$rs=mysql_query($query)  or die(mysql_error());
echo "<script type='text/javascript'> window.location.href='test.php?cid=".$cid."'</script>";
