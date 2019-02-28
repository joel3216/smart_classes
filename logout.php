	<?php 
  require_once('conn.php');
  $cid = $_GET['cid'];
  $query = "delete from signed where id='$cid'";
  $rs=mysql_query($query)  or die(mysql_error());
  echo "<script type='text/javascript'>window.location.href='home.php';</script>";
?>