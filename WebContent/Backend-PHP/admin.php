
<html>
<title>ADMIN LOGIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

<body>
<div class="w3-top w3-center">
<h1 class="w3-xxxlarge w3-animate-bottom">CHEZ MOI</h1>
</div>

<!-- Header -->
<header class="w3-container w3-padding" id="myHeader">
<div>
<img src="/infoproject/finallogo.png" alt="Avatar" width="224" height="162">
</div>
<center>
<div class="w3-padding-64 w3-content w3-text-grey" id="contact">
<h2 class="w3-text-dark-black">Adminlogin</h2>
<hr style="width:200px" class="w3-opacity">
</div>
</header>
<form action="/infoproject/adminlogin.php" method="post">
  <center>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="adminname" required>
<br><br>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="adminpassword" required>
<br><br>
    <button type="submit">Login</button>
    </div>
    </center>
</form>
</center>
</body>
</html>