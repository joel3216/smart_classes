<?php
include("conn.php");
$cid=$_GET['cid'];
$vidnm=$_POST['link'];
$SQL = "select max(vid) FROM `videos`";
$result = mysql_query($SQL);
$row=mysql_fetch_array($result);
$vid=$row[0]+1;
$query="insert into videos(vid,vidname) values('$vid','$vidnm')";
$rs=mysql_query($query)  or die(mysql_error());
	  
echo "<script type='text/javascript'> window.location.href='videos.php?cid=".$cid."'</script>";
  
 


?>