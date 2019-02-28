<?php
include('conn.php');
$cid=$_GET['cid'];
$tid=$_GET['tid'];
$tname=$_GET['tname'];
$SQL = "delete from tests where tid=".$tid;
$result = mysql_query($SQL) or die(mysql_error());
$SQL = "drop table ".$tname;
$result = mysql_query($SQL) or die(mysql_error());
echo "<script type='text/javascript'> window.location.href='test.php?cid=".$cid."'</script>";
?>