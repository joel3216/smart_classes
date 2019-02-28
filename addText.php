<?php
include("conn.php");
$cid=$_GET['cid'];
$link=$_GET['link'];
$course=$_POST['course'];
$sub=$_POST['sub'];

if (($_FILES["pdf"]["type"] == "application/pdf"))

  {
  if ($_FILES["pdf"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["pdf"]["error"] . "<br />";
    }
  else
    {
    
    move_uploaded_file($_FILES["pdf"]["tmp_name"],
    "pdf/textbook/" . $_FILES["pdf"]["name"]);
    echo "Stored in: " . "pdf/textbook/" . $_FILES["pdf"]["name"];
      
    }
  }
else
  {
  echo "Invalid file";
  }
  
  $allowedExts = array("jpg", "jpeg", "png");
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

if ((($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/jpeg"))

&& in_array($extension, $allowedExts))

  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    move_uploaded_file($_FILES["file"]["tmp_name"],
    "img/cover/" . $_FILES["file"]["name"]);
    echo "Stored in: " . "img/cover/" . $_FILES["file"]["name"];
      
    }
  }
else
  {
  echo "Invalid file";
  }
  
$pdf=$_FILES["pdf"]["name"];
$cover=$_FILES["file"]["name"];
$SQL = "select max(tid) FROM textbooks";
$result = mysql_query($SQL);
$row=mysql_fetch_array($result);
$tid=$row[0]+1;
$query="insert into textbooks(tid,course,subject,pdf,cover) values('$tid','$course','$sub','$pdf','$cover')";
$result = mysql_query($query) or die(mysql_error());
echo "<script type='text/javascript'> window.location.href='".$link."?cid=".$cid."&course=".$course."'</script>";
?>