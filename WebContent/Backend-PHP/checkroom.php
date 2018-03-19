<!DOCTYPE html>
<html>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="checkroom.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-third img{margin-bottom:-6px;opacity:0.8;cursor:pointer}
.w3-third img:hover{opacity:1}
.w3-black w3-center w3-padding-24{
position: fixed;  
bottom: 0px;}
.imge{background: url("http://localhost:8080/info6/image/finallogo.png");
    background-size: 80px 60px;
    background-repeat: no-repeat;
    padding-top: 40px;}
.w3-navbar li a {
    padding: 16px;
    float: left;
}
</style>
<body>
<header>
<div class="w3-top">
  <ul class="w3-navbar w3-white w3-card-2" id="myNavbar">
 <li>
      <a href="" class="w3-wide">INFO-6</a>
    </li>    
    <!-- Right-sided navbar links -->
    <li class="w3-right w3-hide-small">
      <a href="">HOME</a>
      <a href="">PRODUCTS</a>
      <a href=""> COMPANY</a>
      <a href="">CONTACT US</a>
    </li>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->
    <li>
      <a href="javascript:void(0)" class="w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
        <i class="fa fa-bars w3-padding-right w3-padding-left"></i>
      </a>
    </li>
  </ul>
</div>

</header>

<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-white w3-animate-left w3-center w3-text-grey w3-collapse w3-top" style="z-index:3;width:300px;font-weight:bold" id="mySidenav"><br>
<div>
    <img class=imge src="http://localhost:8080/info6/image/finallogo.png" alt="Avatar" width="300" height="190">
  </div>
  
  <a href="#temp" onclick="w3_close()" class="w3-padding">Temperature</a> 
  <a href="#humidity" onclick="w3_close()" class="w3-padding">Humidity</a> 
  <a href="#win" onclick="w3_close()" class="w3-padding">window</a>
  <a href="#door" onclick="w3_close()" class="w3-padding">Doors</a>
  <a href="#cam" onclick="w3_close()" class="w3-padding">Camera</a>
  <a href="#light" onclick="w3_close()" class="w3-padding">Light</a>  
   

</nav>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Push down content on small screens --> 
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Photo grid -->
  <div class="w3-container w3-dark-grey w3-center w3-text-light-grey w3-padding-32" id="temp">
    <h4><b>Temperature</b></h4>
    <img src="http://www.geothermal.geos.vt.edu/gif/CrisfieldDeepGeothermalTest.gif" alt="graph" class="w3-image w3-padding-32" width="600" height="650">
    <div class="w3-content w3-justify" style="max-width:600px">
    </div>
  </div>
  
     <div class="w3-container w3-dark-grey w3-center w3-text-light-grey w3-padding-32" id="humidity">
    <h4><b>Humidity</b></h4>
    <img src="http://4.bp.blogspot.com/_UFDhrGObeFc/TTQTlwIKd-I/AAAAAAAAB78/IfSfoF7rWtQ/s1600/relativeHumidity.png" alt="window" class="w3-image w3-padding-32" width="600" height="650">
    <div class="w3-content w3-justify" style="max-width:600px">
    </div>
	</div>
  
<div class="w3-container w3-dark-grey w3-center w3-text-light-grey w3-padding-32" id="win">
    <h4><b>Window</b></h4>
    <img src="https://www.spyshopeurope.com/upload/images/sensor400.jpg" alt="window" class="w3-image w3-padding-32" width="600" height="650">
    <div class="w3-content w3-justify" style=" max-width:600px">
    </div>
	
</div>
  
  
 <div class="w3-container w3-dark-grey w3-center w3-text-light-grey w3-padding-32" id="door">
    <h4><b>Door</b></h4>
    <img src="http://cohlab.com/wp-content/uploads/Google-Doorway-pages-update.png" alt="door" class="w3-image w3-padding-32" width="600" height="650">
    <div class="w3-content w3-justify" style="max-width:600px">
    </div>
    
</div>
  
  
    <div class="w3-container w3-dark-grey w3-center w3-text-light-grey w3-padding-32" id="cam">
    <h4><b>Camera</b></h4>
    <img src="http://tr1.cbsistatic.com/hub/i/r/2014/04/18/7b7148b5-2a28-4804-a34e-61a37b259cc8/resize/770x/e561ebe21d6543237a86f73c33a1d1a5/googlecamerahero.png" alt="cam" class="w3-image w3-padding-32" width="600" height="650">
    <div class="w3-content w3-justify" style="max-width:600px">
    </div>
    
  </div>

  <div class="w3-container w3-dark-grey w3-center w3-text-light-grey w3-padding-32" id="light">
    <h4><b>Light</b></h4>
    <img src="https://scienceprogress.org/wp-content/uploads/2007/11/google_light.jpg" alt="light" class="w3-image w3-padding-32" width="600" height="650">
    <div class="w3-content w3-justify" style="max-width:600px">
    </div>
    
  </div>
</body>
</html>
