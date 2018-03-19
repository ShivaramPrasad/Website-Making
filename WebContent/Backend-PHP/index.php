<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>LOGIN_PAGE</title>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="logincss" type="text/css" href="logincss.css">
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top w3-center">
<h1 class="w3-xxxlarge w3-animate-bottom">CHEZ MOI</h1>
  
    </div>
    
<!-- Header -->
<header class="w3-container w3-padding" id="myHeader">
<div>
    <img src="/infoproject/finallogo.png" alt="Avatar" width="224" height="162">
    </div>
</header>



<div class="w3-row-padding w3-center w3-margin-top">
	<div class="w3-third">
  		<div class="w3-card-2 w3-padding-top" style="min-height:400px">
  			<p><a href="/infoproject/registration.php" class="w3-btn w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Register</a></p>
   		<h4>If you have not login already you can register here by clicking on the above icon!!!!!!!</h4><br><br>
   		<h4>The necessary details are to fully filled to have the interactive communication so fill the registration form fully</h4>
   		</div>
	</div>

	<div class="w3-third w3-center">
  		<div class="w3-card-2 w3-padding-bottom w3-center" style="max-height:0px">
	<div class="w3-display-middle w3-center">
					<i class="fa fa-arrow-right w3-margin-bottom w3-text-theme" style="font-size:50px"></i>
			</div>
		</div>
		</div>

<div class="w3-third">
  <div class="w3-card-2 w3-padding-top" style="min-height:400px">
  <h4>LOGIN</h4>
      <form action="/infoproject/login.php" method="post">
           <div class="imgcontainer">
             <img src="/infoproject/login.png" alt="Avatar" class="avatar">
           </div>

           <div class="container">
             <label><b>Username</b></label>
             <input type="text" placeholder="Enter Username" name="username" required>
             <br><br>
             <label><b>Password</b></label>
             <input type="password" placeholder="Enter Password" name="password" required>
	         <br><br>
             <input name="submit" type="submit" value=" Login ">
            
 <br><br>          </div>
         </form>  
  </div>
</div>
</div>

</body>
</html>