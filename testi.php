<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

ul:before,ul:after {
  content: " ";
  display: table; 
}

ul:after { clear: both; }

ul ul ul {
  left: 100%;
  top: 0;
}

li:hover > ul {
  display: block;
  position: absolute;
}

li:hover li { float: none; }
li:hover a { background: #1bc2a2; }
li:hover li a:hover { background: #2c3e50; }
.main-navigation li ul li { border-top: 0; }

li ul { display: none; }

ul li a {
  display: block;
  padding: 1em;
  text-decoration: none;
  white-space: nowrap;
  color: black;
}
ul li a:hover { background: red; }

ul {
  list-style: none;
  padding: 0;
  margin: 0;
  background: #1bc2a2;
}

ul li {
  display: block;
  position: relative;
  float: left;
  background: #1bc2a2;
}


body {

  background-color: tomato;
  -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
  -webkit-animation-duration: 8s; /* Safari 4.0 - 8.0 */
  animation-name: example;
  animation-duration: 20s;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes example {
  from {background-color: tomato;}
  to {background-color: grey;}
}

/* Standard syntax */
@keyframes example {
  from {background-color: grey;}
  to {background-color: tomato;}
}
.container {
  border: 2px solid #ccc;
  background-color: #E6E6FA;
  border-radius: 5px;
  padding: 16px;
  margin: 16px 0
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  margin-right: 20px;
  border-radius: 50%;
}

.container span {
  font-size: 20px;
  margin-right: 15px;
}

@media (max-width: 500px) {
  .container {
      text-align: center;
  }
  .container img {
      margin: auto;
      float: none;
      display: block;
  }
}
</style>
</head>
<body>

<ul class="main-navigation">
  <li><a href="#">Home</a></li>
  <li><a href="#">Courses</a>
    <ul>

      <li><a href="#">Materials for UG</a>
        <ul>
          <li><a href="#">Syllabus</a></li>
          <li><a href="#">Mock Test</a></li>
          <li><a href="#">Videos</a></li>
        </ul>
      </li>
      <li><a href="#">Materials for PG</a>
        <ul>
          <li><a href="#">Syllabus</a></li>
          <li><a href="#">Mock Test</a></li>
          <li><a href="#">Videos</a></li>
        </ul>
      </li>
      <li><a href="#">Login Or Logout</a></li>
    </ul>
  </li>
  <li><a href="#">Testimonals</a> </li>
  <li><a href="#">Pioneers</a></li>
  <li><a href="#">News</a></li>
  <li><a href="#">Latest news</a></li>
  <li><a href="#">About Us</a></li>
</ul>
<br><br><br><br><br><br><br><br>

<!-- pr -->
<b><center><h1>Testimonials</h1></center></b>


<div class="container">
 
  <p><span>Chris Fox.</span> student at Mighty Schools.</p>
  <p>Good.</p>
</div>

<div class="container">
 
  <p><span>Rebecca.</span> student at Comp.</p>
  <p>good tutorials.</p>
</div>

<div class="container">
 
  <p><span>Chris.</span> student at Mighty Schools.</p>
  <p>effective learning.</p>
</div>

<div class="container">
 
  <p><span>Flex.</span> student at Compy.</p>
  <p>Covered all topics.</p>
</div>

<br><br><br>
<h2><b>Comment Section:</b></h2>
<br>
<form action="/action_page.php" id="usrform">
  Name: <input type="text" name="usrname" required>
  <input type="submit">
</form>
<br>
Comment:<textarea rows="4" cols="50" name="comment" form="usrform" required>
</textarea>
</form>

</body>
</html>
