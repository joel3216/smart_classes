<?php
include("conn.php");
$cid = $_GET['cid'];
$tname=$_GET['tname'];

require_once('conn.php');
$sql = "select * from ".$tname;
$query = mysql_query($sql);
if($query&&mysql_num_rows($query)){
    while($row = mysql_fetch_assoc($query)){
	$data[] = $row;
	}
}
  if(!isset($data)) echo "<h3>No questions found. Please add</h3>";
      else{
echo "<h1>".$tname."</h1>";
echo"<form name='test' method='post' action='evalTest.php?cid=".$cid."&tname=".$tname." ' style='background-color:#DCD7E1;'>";
echo "<fieldset>";
echo "<legend>Attempt test</legend>";
foreach ($data as $quest){
	

	echo $quest['qid'].") ".$quest['question'];
	echo "<br/>";
	echo "<input type= 'radio' name='".$quest['qid']."' value='".$quest['option1']."'>".$quest['option1'];
	echo "<input type= 'radio' name='".$quest['qid']."' value='".$quest['option2']."'>".$quest['option2'];
	echo "<input type= 'radio' name='".$quest['qid']."' value='".$quest['option3']."'>".$quest['option3'];
	echo "<input type= 'radio' name='".$quest['qid']."' value='".$quest['option4']."'>".$quest['option4'];
	echo"<br/>";

}
echo"<tr><td><input type='submit' name='submit' value='Submit' /></td></tr>";
echo"</fieldset>";
echo"</form>";
	  }
?>