<?php 
  $title="Home";
  include 'head.php';
?>

  
  
<div class="row">
<center>
      <!-- end div#content --><!-- end div#sidebar -->

<?php
//include("header.php");
extract($_POST);

include("conn.php");

if($_POST['name'] =='' ||$_POST['pass']==''||$_POST['city']==''){
echo "<script type='text/javascript'>alert('Please enter a valid customer detail'); window.location.href='customerreg.php'; </script>";	
}else{
$query="insert into users(name,city,type,password) values('$name','$city','$user','$pass')";
$rs=mysql_query($query)  or die(mysql_error());
//echo  'inserted';
echo "<script type='text/javascript'>alert('user Registered Sucessfully'); window.location.href='login.php'; </script>";		
}

?>
      </center>
    
  </div>  