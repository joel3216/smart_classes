<?php
include('conn.php');
$cid=$_GET['cid'];
$sid=$_GET['sid'];
$link=$_GET['link'];
$course=$_GET['course'];
$SQL = "delete from syllabus where sid=".$sid;
$result = mysql_query($SQL) or die(mysql_error());
$base_directory = 'pdf/syllabus/';
unlink($base_directory.$_GET['file']);
echo "<script type='text/javascript'> window.location.href='".$link."?cid=".$cid."&course=".$course."'</script>";
?>