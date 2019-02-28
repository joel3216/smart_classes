<!DOCTYPE html>
<html>
<title>Geography</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
<body class="w3-light-grey">

<!-- Navigation Bar -->
<?php 
  include 'nav.php';
?>
<!-- Header -->
<header class="w3-display-container w3-content" style="max-width:1500px;">
  <img class="w3-image" src="img/g1.jpg" alt="The Hotel" style="min-width:1000px" width="100%" height="500">
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1532px;">

  <div class="w3-row-padding w3-padding-16">
    <div class="w3-third w3-margin-bottom">
      <img src="img/g2.jpg" alt="Single room" style="width:100%;height:300px">
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="img/g3.jpg" alt="Double room" style="width:100%;height:300px">
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="img/g4.jpg" alt="Delux room" style="width:100%;height:300px">
    </div>
  </div>

  <div class="w3-row-padding" id="about">
    <div class="w3-col 12">
      <h3>About</h3>
      <h6>History (from Greek ἱστορία, historia, meaning "inquiry, knowledge acquired by investigation")[2] is the study of the past as it is described in written documents.[3][4] Events occurring before written record are considered prehistory. It is an umbrella term that relates to past events as well as the memory, discovery, collection, organization, presentation, and interpretation of information about these events. Scholars who write about history are called historians. 
History can also refer to the academic discipline which uses a narrative to examine and analyse a sequence of past events, and objectively determine the patterns of cause and effect that determine them.[5][6] Historians sometimes debate the nature of history and its usefulness by discussing the study of the discipline as an end in itself and as a way of providing "perspective" on the problems of the present.[5][7][8][9] 
Stories common to a particular culture, but not supported by external sources (such as the tales surrounding King Arthur), are usually classified as cultural heritage or legends, because they do not show the "disinterested investigation" required of the discipline of history.[10][11] Herodotus, a 5th-century BC Greek historian is considered within the Western tradition to be the "father of history", and, along with his contemporary Thucydides, helped form the foundations for the modern study of human history. Their works continue to be read today, and the gap between the culture-focused Herodotus and the military-focused Thucydides remains a point of contention or approach in modern historical writing. In East Asia, a state chronicle, the Spring and Autumn Annals was known to be compiled from as early as 722 BC although only 2nd-century BC texts have survived. 
Ancient influences have helped spawn variant interpretations of the nature of history which have evolved over the centuries and continue to change today. The modern study of history is wide-ranging, and includes the study of specific regions and the study of certain topical or thematical elements of historical investigation. Often history is taught as part of primary and secondary education, and the academic study of history is a major discipline in university studies. </h6>
    <p>We accept: <i class="fa fa-credit-card w3-large"></i> <i class="fa fa-cc-mastercard w3-large"></i> </i> <i class="fa fa-cc-cc-visa w3-large"></i></p>
    </div>
  </div>
  
   <div class="w3-row-padding" id="about">
    <div class="w3-col 12">
      <h3>Syllabus</h3>
	  <?php
	  $SQL = "SELECT * FROM `users` WHERE uid='$cid' AND type='Admin'";	
		$result = mysql_query($SQL);
		$count=mysql_num_rows($result);
		if($count==1){
				echo "<button class='but' onclick='openSForm();'>+</button>";
				echo "<div class='form-popup' id='sform'>";	
				echo"<form name='upload' class='form' method='post' enctype='multipart/form-data' action='addSyllabus.php?cid=".$cid."&link=geography.php'>";
				echo"<table>";
				echo"<tr><th>Add Syllabus</th>";
				echo "<td><button class='but' onclick='closeSForm();'>x</button></td></tr>";
				echo"<tr><td><label for='title'><span>Enter the course:</span></label>";
				echo"<input type='text' name='course' id='course' /></td></tr>"; 
				echo"<tr><td><label for='title'><span>Enter the pdf:</span></label>";
				echo"<input type='file' name='file' id='file' accept='application/pdf' /></td></tr>"; 
				echo"<tr><td><input type='submit' class='but' name='submit' value='Add' /></td></tr>";
				echo"</table>";
				echo"</form>";
				echo"</div>";	
				echo"<br/><br/><br/>";
		}		
	  $course=$_GET['course'];
	  $sql = "select * from syllabus where course='$course'";
	  $query = mysql_query($sql);
	   if($query&&mysql_num_rows($query)){
    while($row = mysql_fetch_assoc($query)){
      $data[] = $row;
    }
  }
      if(!isset($data)) echo "<h3>No syllabuses for this course are currently present in the database</h3>";
      else{
				
        foreach ($data as $syllabus) {
			echo "<a href='pdf/syllabus/".$syllabus['pdf']."'>".$syllabus['pdf']."</a><br/>";
			if($count==1){
				echo"<a href='deleteSyl.php?cid=".$cid."&sid=".$syllabus['sid']."&link=geography.php&course=".$syllabus['course']."&file=".$syllabus['pdf']."' class='but' role='button'>Delete</a><br/><br/><br/>"; 
			}

		}
				
			
	  }
	  ?>
    </div>
  </div>

 <div class="w3-row-padding" id="about">
    <div class="w3-col 12">
      <h3>Textbooks</h3>
	  <?php
	  $SQL = "SELECT * FROM `users` WHERE uid='$cid' AND type='Admin'";	
		$result = mysql_query($SQL);
		$count=mysql_num_rows($result);
		if($count==1){
				echo "<button class='but' onclick='openTBForm();'>+</button>";
				echo "<div class='form-popup' id='tbform'>";	
				echo"<form name='uploadtb' class='form' method='post' enctype='multipart/form-data' action='addText.php?cid=".$cid."&link=geography.php'>";
				echo"<table>";
				echo"<tr><th>Add Textbook</th>";
				echo "<td><button class='but' onclick='closeTBForm();'>x</button></td></tr>";
				echo"<tr><td><label for='title'><span>Enter the course:</span></label>";
				echo"<input type='text' name='course' id='course' /></td></tr>";
				echo"<tr><td><label for='title'><span>Enter the subject:</span></label>";
				echo"<input type='text' name='sub' id='sub' /></td></tr>";
				echo"<tr><td><label for='title'><span>Enter the pdf:</span></label>";
				echo"<input type='file' name='pdf' id='pdf' accept='application/pdf' /></td></tr>";
				echo"<tr><td><label for='title'><span>Enter the cover image:</span></label>";
				echo"<input type='file' name='file' id='file' accept='image/*' /></td></tr>"; 
				echo"<tr><td><input type='submit' class='but' name='submit' value='Add' /></td></tr>";
				echo"</table>";
				echo"</form>";
				echo"</div>";
				echo"<br/><br/><br/>";
			}
	  $course=$_GET['course'];
	  $sql = "select * from textbooks where course='$course' and subject='geography'";
	  $query = mysql_query($sql);
	   if($query&&mysql_num_rows($query)){
    while($row = mysql_fetch_assoc($query)){
      $data1[] = $row;
    }
  }
      if(!isset($data1)) echo "<h3>No textbooks for this course are currently present in the database</h3>";
      else{
		   
        foreach ($data1 as $textbook) {
			echo "<a href='pdf/textbook/".$textbook['pdf']."'><img width='240px' height='300px' src='img/cover/".$textbook['cover']."'/></a>";
			echo"<a href='deleteText.php?cid=".$cid."&tid=".$textbook['tid']."&link=geography.php&course=".$textbook['course']."&file1=".$textbook['cover']."&file2=".$textbook['pdf']."' class='but' role='button'>Delete</a><br/><br/><br/>";

		}
					
	  }
	  ?>
    </div>
  </div>
  
  <div class="w3-row w3-large w3-center" style="margin:32px 0">
    <div class="w3-third"><i class="fa fa-map-marker w3-text-red"></i> Give some address</div>
    <div class="w3-third"><i class="fa fa-phone w3-text-red"></i> Phone: +91 give a number</div>
    <div class="w3-third"><i class="fa fa-envelope w3-text-red"></i> Email: mail@mail.com</div>
  </div>

 

  <div class="w3-container" id="contact">
    <h2>Contact</h2>
    <p>If you have any questions, do not hesitate to ask them.</p>
    <i class="fa fa-map-marker w3-text-red" style="width:30px"></i> Give address<br>
    <i class="fa fa-phone w3-text-red" style="width:30px"></i> Phone: +91 give a  number<br>
    <i class="fa fa-envelope w3-text-red" style="width:30px"> </i> Email: mail@mail.com<br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p><button class="w3-button w3-black w3-padding-large" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-padding-small w3-black w3-center">
  <h5>Find Us On</h5>
  <div class="w3-xlarge w3-padding-small">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</footer>
</body>
</html>
