<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
<!--    no idea-->
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

<!--  ...-->

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

body {
  background-color: yellow;}

<!--for window split
   -->

.split {
  height: 50%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
  background-color: #111;
}

.right {
  right: 0;
  background-color: red;
}

<!--
-->
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

<!--   -->

.newspaper1 {
  -webkit-columns: 100px 4;
  -moz-columns: 100px 4; 
  columns: 100px 4;
}




</style>
</head>

<body>
<?php
include 'nav.php'
?>

<h2><center><b>Tutorial</b></center></h2>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img1.png">
      <img src="img/img1.png" alt="Class Rooms" width="600" height="400"><h2>Class Rooms</h2>
    </a>

  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img2.png">
      <img src="img/img2.png" alt="Test Series" width="600" height="400"><h2>Test Series</h2>
    </a>

  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img4.png">
      <img src="img/img4.png" alt="Postal Courses" width="600" height="400"><h2>Postal Courses</h2>
    </a>

  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img3.png">
      <img src="img/img3.png" alt="Current Affairs" width="600" height="400"><h2>Current Affairs</h2>
    </a>

  </div>
</div>

<div class="clearfix"></div>
<marquee bgcolor="orange" scrollamount="5" direction="up" loop="true"> 
<center> <font color="green"><strong> Interview Guidance Program<br><br> 
                                        Janury Class Room Program<br><br> 
                                        Easy Modules and Tests<br><br>
                                        Current affairs News Papers<br><br>
                                        Results of news<br><br>
                                        online test Schedules</strong></font></center></marquee>


<ul class="main-navigation">
  <li><a href="#">Study Materials</a></li>
  <li><a href="#">Question Papers</a></li>
  <li><a href="#">Tutorials Summary</a></li>
  <li><a href="#">Tutorial Question Papers</a></li>
</ul>
<img src="img/pic1.png" alt="Test Series" width="100%" height="200">


<!--   -->
<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Important Links</h2>
    <p>How to prepare<br>
    How to join<br>
    Syllabus<br>
    Past Question Papers<br>
    Important Links<br>
    Interview Guidance<br>
    </p>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Current Affairs Magazine</h2>
    <p>June 2018<br>
    July 2018<br>
    August 2018<br>
    September 2018<br>
    November 2018<br>
    December 2018<br>
    </p>
  </div>
</div>

<!--   -->
<div class="newspaper1">
 <b>About Us</b><br>Desclaimer <br>Terms and Conditions <br>Privacy <br> Policy<br> <b>Information</b> <br>HandOuts<br> Courses<br>General <br>BookList <br><b>Courses</b> <br>Class Courses <br>Postal Courses<br>Test Series <br>Interview Guidance<br><b>Other Links</b><br>Optional Courses <br>How to join <br>How to prepare</p>
</div>
<!--   -->
<div>
<p><i><center> All Rights Reserved</center></i></p>
</div>

</body>
</html>