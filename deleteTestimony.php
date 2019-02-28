<?php
include('conn.php');
$cid=$_GET['cid'];
$tid=$_GET['tid'];
$SQL = "delete from testimonials where tid=".$tid;
$result = mysql_query($SQL) or die(mysql_error());
$base_directory = 'img/avatar/';
unlink($base_directory.$_GET['file']);
echo "<script type='text/javascript'> window.location.href='testimonials.php?cid=".$cid."'</script>";
?>