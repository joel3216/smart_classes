<?php
include('conn.php');
$cid=$_GET['cid'];
$vid=$_GET['vid'];


$sql="delete from videos where vid='$vid'";
$rs=mysql_query($sql)  or die(mysql_error());

	echo "<script type='text/javascript'>alert('the video was successfully deleted');</script>";
echo"<script type='text/javascript'> window.location.href='videos.php?cid=".$cid."'</script>";

?>