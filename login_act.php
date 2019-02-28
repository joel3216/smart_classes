
<div class="row">
<center>
<?php
include("conn.php");
$errflag=FALSE;
// radio button choice and username and password sent from form      
$id=$_POST['lid'];			 //get by 'name'
$pass=$_POST['pass']; 


		$sql = "SELECT * FROM `users` WHERE name='$id' AND password='$pass'";	
		$result = mysql_query($sql);
		$count=mysql_num_rows($result);
while($row=mysql_fetch_array($result))
{
    $cid=$row[0];
	$nm=$row[1];
}
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
	$query="insert into signed(id,name) values('$cid','$nm')";
	$rs=mysql_query($query)  or die(mysql_error());
	$wel = "Welcome back $nm!";
	echo "<script type='text/javascript'>alert('{$wel}');</script>";	

	
?>
<script type='text/javascript'> window.location.href='home.php?cid=<?php echo $cid ?>'</script>
<?php
}

 
 else {
    
	echo "<script type='text/javascript'>alert('Wrong Username or Password'); window.location.href='login.php'; </script>";
	$errflag=TRUE; 
 }
 
	
	

 
 //This is what i added new


 
session_write_close();
ob_end_flush();
?>

</center>
</div>  

</body>