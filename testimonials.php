<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {

  background-color: tomato;
  -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
  -webkit-animation-duration: 8s; /* Safari 4.0 - 8.0 */
  animation-name: example;
  animation-duration: 20s;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes example {
  from {background-color: tomato;}
  to {background-color: grey;}
}

/* Standard syntax */
@keyframes example {
  from {background-color: grey;}
  to {background-color: tomato;}
}


</style>
</head>
<body>
<?php 
  include 'nav.php';
  echo "<br/>";
  echo "<br/>";
?>
<h2>Testimonials</h2>

<?php 
  $sql = "select * from testimonials";
  $query = mysql_query($sql);
  if($query&&mysql_num_rows($query)){
    while($row = mysql_fetch_assoc($query)){
      $data[] = $row;
    }
  }
    
	if(!isset($data)) echo "<h3>No testimonial are currently present in database</h3>";
    else{
		$SQL = "SELECT * FROM `users` WHERE uid='$cid' AND type='Admin'";	
		$result = mysql_query($SQL);
		$count=mysql_num_rows($result);
		foreach ($data as $testimony) {
           
?>

<div class="container">
  <img src="img/avatar/<?php echo $testimony['avatar'] ?>" alt="Avatar" style="width:90px">
  <p><span><?php echo $testimony['name'] ?></span> <?php echo $testimony['designation'] ?></p>
  <p><?php echo $testimony['testimony'] ?></p>
  <?php echo"<a href=deleteTestimony.php?cid=".$cid."&tid=".$testimony['tid']."&file=".$testimony['avatar']." > delete</a>";?>
</div>
<?php }} 
	 $SQL = "SELECT * FROM `users` WHERE uid='$cid' AND type='Admin'";	
		$result = mysql_query($SQL);
		$count=mysql_num_rows($result);
		if($count==1){
		echo"<form name='addTestimony' class='form' method='post' enctype='multipart/form-data' action='addTestimony.php?cid=".$cid."' >";
		echo"<table>";
		echo"<tr><th>Add a Testimonial</th></tr>";
		echo"<tr><td><label for='title'><span>Enter an avatar:</span></label>";
		echo"<input type='file' name='file' id='file' accept='image/*' /></td></tr>"; 
		
		echo"<tr><td><label for='title'><span>Enter the name:</span></label>";
		echo"<input type='text' name='name' id='name' /></td></tr>"; 

		echo"<tr><td><label for='title'><span>Enter the designation:</span></label>";
		echo"<input type='text' name='designation' id='designation' /></td></tr>"; 

		echo"<tr><td><label for='title'><span>Enter the testimony:</span></label>";
		echo"<input type='text' name='tmony' id='tmony' /></td></tr>";
		echo"<tr><td><input type='submit' class='but' name='submit' value='Add Testimony' /></td></tr>";
		echo"</table>";
		echo"</form>";
		}
?>

</body>
</html>
