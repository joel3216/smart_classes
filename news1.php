
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
<!--    no idea-->
* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 33%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 75%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

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

</style>
</head>

<body>

<h2><center><b>News Feed</b></center></h2>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img1.png">
      <img src="img1.png" alt="Class Rooms" width="600" height="400"><h2>Class Rooms</h2>
    </a>

  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img2.png">
      <img src="img2.png" alt="Test Series" width="600" height="400"><h2>Test Series</h2>
    </a>

  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img4.png">
      <img src="img4.png" alt="Postal Courses" width="600" height="400"><h2>Postal Courses</h2>
    </a>

  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img3.png">
      <img src="img3.png" alt="Current Affairs" width="600" height="400"><h2>Current Affairs</h2>
    </a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img1.png">
      <img src="img1.png" alt="Class Rooms" width="600" height="400"><h2>Class Rooms</h2>
    </a>

  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img2.png">
      <img src="img2.png" alt="Test Series" width="600" height="400"><h2>Test Series</h2>
    </a>

  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img4.png">
      <img src="img4.png" alt="Postal Courses" width="600" height="400"><h2>Postal Courses</h2>
    </a>

  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img3.png">
      <img src="img3.png" alt="Current Affairs" width="600" height="400"><h2>Current Affairs</h2>
    </a>

  </div>
</div>

<div class="clearfix"></div>

</body>
</html>