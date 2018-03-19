<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Registration</title>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top w3-center">
<h1 class="w3-xxxlarge w3-animate-bottom">CHEZ MOI</h1>
  <h4>CHOOSE ROOM</h4>
    </div>
    
<!-- Header -->
<header class="w3-container w3-padding" id="myHeader">
<div>
    <img src="/infoproject/finallogo.png" alt="Avatar" width="224" height="162">
    </div>
</header>

<form action="/infoproject/registrationsuccess.php" method="post" >
<center>
    First Name:
    <input type="text" name="firstname"><br>
    Last Name:
    <input type="text" name="lastname"><br>
    User Name:
    <input type="text" name="username"><br>
    E-mail:
    <input type="text" name="email"><br>
    Password:
    <input type="password" name="password"><br>
    Sex:<input type="radio" name="sex" value="male">Male
    <input type="radio" name="sex" value="female">Female<br>
    Date-of-Birth:
    <input type="date" name="dob"><br>
    Address:
    <input type="text" name="address"><br>
    No.Of.Rooms:
    <input type="number" name="rooms"><br>    
    Telephone Number:
    <input type="number" name="telno"><br>
    <br>
    <br>
    <input type="submit" value="Submit">
</center>    
    </form>

  

</form>
</body>
</html>