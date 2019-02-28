<?php
include('conn.php');
$cid=$_GET['cid'];
$tid=$_GET['tid'];
$link=$_GET['link'];
$course=$_GET['course'];
$SQL = "delete from textbooks where tid=".$tid;
$result = mysql_query($SQL) or die(mysql_error());
$base_directory = 'img/cover/';
unlink($base_directory.$_GET['file1']);
$base_directory = 'pdf/textbook/';
unlink($base_directory.$_GET['file2']);
echo "<script type='text/javascript'> window.location.href='".$link."?cid=".$cid."&course=".$course."'</script>";
?>