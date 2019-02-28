<?php
include("conn.php");
$cid=$_GET['cid'];
$name=$_POST['name'];
$des=$_POST['designation'];
$tmony=$_POST['tmony'];
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
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    
    move_uploaded_file($_FILES["file"]["tmp_name"],
    "img/avatar/" . $_FILES["file"]["name"]);
    echo "Stored in: " . "img/avatar/" . $_FILES["file"]["name"];
      
    }
  }
else
  {
  echo "Invalid file";
  }
$avatar=$_FILES["file"]["name"];
$SQL = "select max(tid) FROM testimonials";
$result = mysql_query($SQL);
$row=mysql_fetch_array($result);
$tid=$row[0]+1;
$query="insert into testimonials(tid,name,designation,testimony,avatar) values('$tid','$name','$des','$tmony','$avatar')";
$result = mysql_query($query) or die(mysql_error());
echo "<script type='text/javascript'> window.location.href='testimonials.php?cid=".$cid."'</script>";
?>