<?php
include("conn.php");
$cid=$_GET['cid'];
$link=$_GET['link'];
$course=$_POST['course'];

if (($_FILES["file"]["type"] == "application/pdf"))

  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    
    move_uploaded_file($_FILES["file"]["tmp_name"],
    "pdf/syllabus/" . $_FILES["file"]["name"]);
    echo "Stored in: " . "pdf/syllabus/" . $_FILES["file"]["name"];
      
    }
  }
else
  {
  echo "Invalid file";
  }
$pdf=$_FILES["file"]["name"];
$SQL = "select max(sid) FROM syllabus";
$result = mysql_query($SQL);
$row=mysql_fetch_array($result);
$sid=$row[0]+1;
$query="insert into syllabus(sid,course,pdf) values('$sid','$course','$pdf')";
$result = mysql_query($query) or die(mysql_error());
echo "<script type='text/javascript'> window.location.href='".$link."?cid=".$cid."&course=".$course."'</script>";
?>