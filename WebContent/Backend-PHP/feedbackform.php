
<html>
<title>FEEDBACK FORM</title>
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
<h2 class="w3-text-dark-black">Feedback Form</h2>
<hr style="width:200px" class="w3-opacity">
</div>
</header>

<form action="/infoproject/feedbacksuccess.php" method="post" >
<center>
<p>Name:</p>
<input type="text" name="name"><br>
<p>E-Mail:</p>
<input type="text" name="email"><br>
<p>Phone:</p>
<input type="text" name="phone"><br>
<p>Priority</p>
<select name="priority" size="1">
<option value="Low">Low</option>
<option value="Normal">Normal</option>
<option value="High">High</option>
<option value="Emergency">Emergency</option>
</select>
<br />
<p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />

<input type="submit" value="Submit">
</center>
</form>

