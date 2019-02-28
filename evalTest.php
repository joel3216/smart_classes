<?php
include 'nav.php';
$total=0;$correct=0;
$tname=$_GET['tname'];
$sql = "select * from ".$tname;
$query = mysql_query($sql);
if($query&&mysql_num_rows($query)){
    while($row = mysql_fetch_assoc($query)){
	$data[] = $row;
	}
}


foreach($data as $quest){
	$ans=$_POST[$quest['qid']];
	if ($ans==$quest['answer']){
		$correct+=1;
	}
	$total+=1;
}
echo "<br/>";
echo "<br/>";
echo "<h1> You scored ".$correct." out of ".$total."</h1>";

?>