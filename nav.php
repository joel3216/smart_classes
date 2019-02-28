<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<?php
include("conn.php");
if(isset($_GET['cid']))
$cid = $_GET['cid'];
?>
</head>

<body class="navBar">

<ul class="main-navigation">
  <li><a href="home.php<?php if(isset($_GET['cid'])){echo "?cid=".$cid; }?>">Home</a></li>
  <li><a href="#">Courses</a>
    <ul>

      <li><a href="#">Materials for UG</a>
        <ul>
          <li><a href="#">Syllabus</a></li>
          <li><a href="<?php if(isset($_GET['cid'])){echo "test.php?cid=".$cid;}else{echo "login.php";} ?>">Mock Test</a></li>
          <li><a href="<?php if(isset($_GET['cid'])){echo "videos.php?cid=".$cid;}else{echo "login.php";}?>">Videos</a></li>
        </ul>
      </li>
      <li><a href="#">Materials for PG</a>
        <ul>
          <li><a href="<?php if(isset($_GET['cid'])){echo "geography.php?cid=".$cid."&course=ias";}else{echo "login.php";} ?>">Geography</a></li>
		  <li><a href="#">History</a></li>
          <li><a href="<?php if(isset($_GET['cid'])){echo "test.php?cid=".$cid;}else{echo "login.php";} ?>">Mock Test</a></li>
          <li><a href="<?php if(isset($_GET['cid'])){echo "videos.php?cid=".$cid;}else{echo "login.php";}?>">Videos</a></li>
        </ul>
      </li>
    </ul>
  </li>
  <li><a href="<?php if(isset($_GET['cid'])){echo "testimonials.php?cid=".$cid;}else{echo "login.php";} ?>">Testimonals</a></li>
  <li><a href="#">Pioneers</a></li>
  <li><a href="#">News</a></li>
  <li><a href="#">Latest news</a></li>
  <li><a href="#">About Us</a></li>
  <?php if(!isset($_GET['cid'])){
  
  echo "<li><a href='#' onclick='openForm();'>Login</a></li>";}
  ?>
  
  <?php  if(isset($_GET['cid']))
  echo"<li><a href='logout.php?cid=".$cid."'>Logout</a></li>";
  ?>
  
  <?php if(isset($_GET['cid'])){ 
  echo"<li><a href='#'>Logged in as:";  
  $SQL = "SELECT * FROM `users` WHERE uid='$cid'";	
			$result = mysql_query($SQL);
			while($row=mysql_fetch_array($result))
			{
				$name=$row[1];
			}
			echo $name;
			echo "</a></li>";
  }?>
</ul>
<div class="form-popup" id="myForm">
<center>
    <form name="form1" method="post" action="login_act.php" class='form' onsubmit="return validateForm()">
           <table>
                          <tr>
                            <td height="38" colspan="2"><div align="center"><h2>Login</h2></div></td>
							<td><button class="but" onclick="closeForm();">x</button></td>
                          </tr>
                           <tr>
                           <td  height="38" colspan="2"><div align="center"><a href="customerreg.php"><h4>New here?</h4></a></div></td>
                          </tr>
                          <tr>
                              <td width="122" style="color: black"><div align="right">Username: &nbsp;&nbsp;</div></td>
                              <td width="158"><input type="text" name="lid" id="lid"><br></td>
                          </tr>
                          <tr>
                            <td style="color: black"><div align="right">Password:&nbsp;&nbsp;</div></td>
                            <td><input type="password" name="pass" id="pass"><br></td>
                          </tr>
                          <tr>
                            <td></td>
							<td><input type="submit" align="right" class="but" name="submit" id="submit" value="Login"> <input type="reset" align="right" class="but" name="cancel" id="cancel" value="Reset"> </td>
                          </tr>
              </table>
          
          
          &nbsp;          
        </form>
      </center>
    
  </div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
	event.preventDefault();
  document.getElementById("myForm").style.display = "none";
}

function openVideoForm() {
  document.getElementById("vidform").style.display = "block";
}

function closeVideoForm() {
	event.preventDefault();
  document.getElementById("vidform").style.display = "none";
}
function openTestForm() {
  document.getElementById("testform").style.display = "block";
}
function closeTestForm() {
	event.preventDefault();
  document.getElementById("testform").style.display = "none";
}
function openQForm() {
  document.getElementById("qform").style.display = "block";
}
function closeQForm() {
	event.preventDefault();
  document.getElementById("qform").style.display = "none";
}
function openSForm() {
  document.getElementById("sform").style.display = "block";
}
function closeSForm() {
	event.preventDefault();
  document.getElementById("sform").style.display = "none";
}
function openTBForm() {
  document.getElementById("tbform").style.display = "block";
}
function closeTBForm() {
	event.preventDefault();
  document.getElementById("tbform").style.display = "none";
}

</script>  
</body>
</html>