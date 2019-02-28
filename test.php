<body style=" background-image: url(img/back.jpg)">
<?php
include 'nav.php'
?>

   <?php 
   		echo"<br />";
		echo"<br />";
		echo"<br />";
		echo"<br />";
    require_once('conn.php');
  $sql = "select * from tests";
  $query = mysql_query($sql);
  if($query&&mysql_num_rows($query)){
    while($row = mysql_fetch_assoc($query)){
      $data[] = $row;
    }
  }
   if(!isset($data)) echo "<h3>No tests are currently present in the database</h3>";
      else{
		$SQL = "SELECT * FROM `users` WHERE uid='$cid' AND type='Admin'";	
		$result = mysql_query($SQL);
		$count=mysql_num_rows($result);
        foreach ($data as $test) {
	
			echo"<a href=attemptTest?cid=".$cid."&tname=".$test['tname']." >".$test['tname']."</a>";
			if($count==1){
				echo"<a href=deleteTest.php?cid=".$cid."&tid=".$test['tid']."&tname=".$test['tname']." > delete</a><br/><br/><br/>";
			}
		}
	  }
	  
	  
   if(isset($cid)){
	 $SQL = "SELECT * FROM `users` WHERE uid='$cid' AND type='Admin'";	
		$result = mysql_query($SQL);
		$count=mysql_num_rows($result);
		if($count==1){
		
		
		
		echo "<button class='but' onclick='openTestForm();'>Add Test</button>";	
		echo "<div class='form-popup' id='testform'>";
		echo"<form name='addTest' class='form' method='post' action='addTest.php?cid=".$cid."'>";
		echo"<table>";
		echo"<tr><th>Add a Test</th>";
		echo "<td><button class='but' onclick='closeTestForm();'>x</button></td></tr>";
		echo"<tr><td><label for='title'><span>Enter the test name:</span></label>";
		echo"<input type='text' name='tname' id='tname' /></td></tr>"; 
		echo"<tr><td><input type='submit' class='but' name='submit' value='Add' /></td></tr>";
		echo"</table>";
		echo"</form>";
		echo"</div>";
		
		echo "<button class='but' onclick='openQForm();'>Update Test</button>";	
		echo "<div class='form-popup' id='qform'>";
		echo"<form name='makeTest' class='form' method='post' action='makeTest.php?cid=".$cid."'>";
		echo"<table>";
		echo"<tr><th>Add a questions to an existing test</th>";
		echo "<td><button class='but' onclick='closeQForm();'>x</button></td></tr>";
		echo"<tr><td><label for='title'><span>Enter the test name:</span></label>";
		echo"<input type='text' name='tname' id='tname' /></td></tr>"; 
		echo"<tr><td><label for='title'><span>Enter a question(within 500 words):</span></label>";
		echo"<input type='text' name='q' id='q' /></td></tr>"; 
		echo"<tr><td><label for='title'><span>Enter the first option:</span></label>";
		echo"<input type='text' name='op1' id='op1' /></td></tr>"; 
		echo"<tr><td><label for='title'><span>Enter the second option:</span></label>";
		echo"<input type='text' name='op2' id='op2' /></td></tr>"; 
		echo"<tr><td><label for='title'><span>Enter the third option:</span></label>";
		echo"<input type='text' name='op3' id='op3' /></td></tr>"; 
		echo"<tr><td><label for='title'><span>Enter the fourth option:</span></label>";
		echo"<input type='text' name='op4' id='op4' /></td></tr>"; 
		echo"<br />";
		echo"<tr><td><label for='title'><span>Enter the correct answer:</span></label>";
		echo"<input type='text' name='ans' id='ans' /></td></tr>"; 
		echo"<tr><td><input type='submit' class='but' name='submit' value='Update' /></td></tr>";
		echo"</table>";
		echo"</form>";
		echo"</div>";
		}
		
		
		
		}
?>
