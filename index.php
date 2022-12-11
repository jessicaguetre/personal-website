<!DOCTYPE html>
<html>
<head>
<title>Jessica Guetre</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}

</style>
</head>
<body>

<!-- Navigation bar -->
<div class="w3-top">
  <div id="myNavbar" class="w3-bar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right w3-text-dark-gray" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button w3-text-dark-gray"><i class="fa fa-home"></i> HOME</a>
    <a href="/jessicaguetre_website/aboutme.php" class="w3-bar-item w3-button w3-hide-small w3-text-dark-gray"><i class="fa fa-th"></i> ABOUT ME</a>
    <a href="/jessicaguetre_website/academics.php" class="w3-bar-item w3-button w3-hide-small w3-text-dark-gray"><i class="fa fa-user"></i> ACADEMICS</a>
    <a href="/jessicaguetre_website/contact.php" class="w3-bar-item w3-button w3-hide-small w3-text-dark-gray"><i class="fa fa-envelope"></i> CONTACT</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="smallNavbar" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="/jessicaguetre_website/aboutme.php" class="w3-bar-item w3-button w3-text-dark-gray" onclick="toggleFunction()">ABOUT ME</a>
    <a href="/jessicaguetre_website/academics.php" class="w3-bar-item w3-button w3-text-dark-gray" onclick="toggleFunction()">ACADEMICS</a>
    <a href="/jessicaguetre_website/contact.php" class="w3-bar-item w3-button w3-text-dark-gray" onclick="toggleFunction()">CONTACT</a>
  </div>
</div>

<!-- Front page parallax -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity" style="border-radius: 15px">JESSICA GUETRE</span>
  </div>
</div>

<!-- About me container -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ENGINEERING PHYSICS STUDENT</h3>
  <p class="w3-center"><em>Queen's University Class of 2024</em></p>
  <div class="w3-row w3-padding-16">
    <div class="w3-col m6 w3-center w3-padding-large container">
      <img src="images/me.jpg" class="translucent-image" alt="Jessica Guetre" width="500" height="333">
    </div>
    <p>Replace with descprition of self.</p>
  </div>
  <p>Replace text with description of self.</p>
</div>

<!-- Thumbnails -->
<div class="w3-row w3-padding-64">
  <div class="w3-col m6 w3-padding-large container">
    <img src="images/kingston.jpg" alt="Kingston, ON" class="clear-image" style="width:100%">
    <div class="middle-transparent">
      <div class="text">Academics</div>
    </div>
  </div>
  <div class="w3-col m6 w3-padding-large container">
    <img src="images/lakeAboveTheClouds1.jpg" alt="Lake Above the Clouds, NH" class="clear-image" style="width:100%">
    <div class="middle-transparent">
      <div class="text">About Me</div>
    </div>
  </div>
</div>

<!-- Resume button -->
<div class="w3-row w3-center w3-dark-grey w3-padding-64">
  <a href="resume.pdf">
    <button class="large-button"><i class="fa fa-file-text-o"></i>  RESUME</button>
  </a>
</div>


<!-- Bottom parallax -->
<div class="bgimg-2 w3-display-container w3-opacity-min"></div>

<!-- Footer -->
<footer class="w3-center w3-dark-grey w3-padding-64">
  <a href="#home"><button class="small-button"><i class="fa fa-arrow-up"></i>  TOP OF PAGE</button></a>
  <div class="w3-xlarge w3-section">
    <a href="https://linkedin.com/in/jessicaguetre"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
    <a href="https://github.com/jessicaguetre"><i class="fa fa-github w3-hover-opacity"></i></a>
    <a href="mailto: jessguetre@gmail.com"><i class="fa fa-envelope w3-hover-opacity"></i></a>
  </div>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("smallNavbar");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
