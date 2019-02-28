<body style=" background-image: url(img/back.jpg)">
<?php 
  include 'nav.php';
  echo "<br/>";
  echo "<br/>";
?>

<?php 
  require_once('conn.php');
  $sql = "select * from videos";
  $query = mysql_query($sql);
  if($query&&mysql_num_rows($query)){
    while($row = mysql_fetch_assoc($query)){
      $data[] = $row;
    }
  }
?>
  
  <div>

    <?php 
      if(!isset($data)) echo "<h3>No videos are currently present in the database</h3>";
      else{
        foreach ($data as $video) {
           
    ?>


      <div>
		<?php echo $video['vidname']?>

        <div class="caption" style="color: white">
           <?php
			$SQL = "SELECT * FROM `users` WHERE uid='$cid' AND type='Admin'";	
			$result = mysql_query($SQL);
			$count=mysql_num_rows($result); 
			if($count==1){
				echo"<a href='deletevid.php?cid=".$cid."&vid=".$video['vid']."' class='but' role='button' onclick='return show_confirm();'>Delete</a><br/><br/><br/>";       
			
			}
			?>
              
        </div>
      </div>

    <?php }} 
	 $SQL = "SELECT * FROM `users` WHERE uid='$cid' AND type='Admin'";	
		$result = mysql_query($SQL);
		$count=mysql_num_rows($result);
		while($row=mysql_fetch_array($result))
		{
			$name=$row[1];
		} 
		if($count==1){
		echo "<button class='but' onclick='openVideoForm();'>+</button>";	
		echo "<div class='form-popup' id='vidform'>";	
		echo"<form name='upload' class='form' method='post' action='upload.php?cid=".$cid."'>";
		echo"<table>";
		echo"<tr><th>Add a youtube video</th>";
		echo "<td><button class='but' onclick='closeVideoForm();'>x</button></td></tr>";
		echo"<tr><td><label for='title'><span>Enter the embedded youtube code:</span></label>";
		echo"<input type='text' name='link' id='link' /></td></tr>"; 
		echo"<br />";
		echo"<tr><td><input type='submit' class='but' name='submit' value='Add Video' /></td></tr>";
		echo"</table>";
		echo"</form>";
		echo"</div>";
		}
?>
  </div>  
		
  

  <script type="text/javascript">
function show_confirm(){
  var r=confirm("OK to delete the video？");
  if (r==true)
    return true;
  else{
	 return false;
  }

}
</script>
</body>