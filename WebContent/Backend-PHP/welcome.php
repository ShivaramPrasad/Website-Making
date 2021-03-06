<!DOCTYPE html>
<html>
<title>welcome page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-image: url("/infoproject/finallogo.png");
    background-position: center;
    background-size: 900px 600px;
    min-height: 100%;
    background-repeat: no-repeat;
}

.w3-navbar li a {
    padding: 16px;
    float: left;
}

</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <ul class="w3-navbar w3-white w3-card-2" id="myNavbar">
    <li>
      <a href="" class="w3-wide">INFO-6</a>
    </li>
    <!-- Right-sided navbar links -->
    <li class="w3-right w3-hide-small">
      <a href="/infoproject/welcome.php">HOME</a>
      <a href="">PRODUCTS</a>
      <a href="/infoproject/admin.php"> ADMIN</a>
      <a href="/infoproject/contactme.php">CONTACT US</a>
    </li>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->
    <li>
      <a href="javascript:void(0)" class="w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
        <i class="fa fa-bars w3-padding-right w3-padding-left"></i>
      </a>
    </li>
  </ul>
</div>

<!-- Sidenav on small screens when clicking the menu icon -->
<nav class="w3-sidenav w3-black w3-card-2 w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-large w3-padding-16">Close �</a>
  <a href="" onclick="w3_close()">HOME</a>
  <a href="" onclick="w3_close()">PRODUCTS</a>
  <a href="" onclick="w3_close()">COMPANY</a>
  <a href="" onclick="w3_close()">CONTACT US</a>
  </nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
<div class="w3-container w3-padding-128" id="about">
  
  <div class="w3-display-left w3-padding-xxlarge w3-text-white">
    <br>
    <br>
    <br>
    <p><a href="" class="w3-btn w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">DEMO VIDEO</a></p>
 
  </div>
  <div>
<div class="w3-display-right w3-padding-xxlarge w3-text-white">
<br>
<br>
<br>
<br>
<p><a href="/infoproject/index.php" class="w3-btn w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off"> TOWARDS FUTURE</a></p>

  </div>
   
  <div class="w3-display-bottomleft w3-padding-xxlarge w3-text-grey w3-large">
    <a href="https://www.facebook.com/" class="w3-hover-text-white"><i class="fa fa-facebook-official"></i></a>
    <a href="#" class="w3-hover-text-white"><i class="fa fa-flickr"></i></a>
    <a href="#" class="w3-hover-text-white"><i class="fa fa-instagram"></i></a>
    <a href="#" class="w3-hover-text-white"><i class="fa fa-twitter"></i></a>
    <a href="#" class="w3-hover-text-white"><i class="fa fa-linkedin"></i></a>
  </div>
</header>

<!-- About Section -->
<div class="w3-container w3-padding-128" id="about">
  <h3 class="w3-center">ABOUT THE COMPANY</h3>
  <p class="w3-center w3-large">Key features of our company</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Responsive</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Passion</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Design</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
  </div>
</div>
</body>
</html>
