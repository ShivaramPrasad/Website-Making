<!DOCTYPE html>
<html>
<head>
<title>USEREDIT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
	<style type="text/css">

		div#container{
			width: 100%;
			height: 950px;

		}
		div#heading{
			width: 100%;
			height:10%;
			background-color: beige;
		}

		div#content_menu{
			width:30%;
			height:80%;
			float:left;

		}
		div#content_body{
			width: 70%;
			height:80%;
			float: left;
		}
		div#footing{
			width: 100%;
			height:10%;
			clear:both;
			background-color: black;
		}
	</style>

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
</header>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
//$sex=$_POST['sex'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$rooms=$_POST['rooms'];
$telno=$_POST['telno'];
$query3="update registration_table set firstname='$firstname', lastname='$lastname',username='$username', email='$email',password='$password',dob='$dob', address='$address',rooms='$rooms', telno='$telno' WHERE `registration_table`.id='$id'";
if($conn->query($query3))
{
	echo "<script>alert('Record updated successfully');location.href='profile_view.php'</script>";

}
}
$sql="select * from registration_table where id='$id'";

$result = $conn->query($sql);
$query2 = $result->fetch_assoc()
?>
<form method="post" action="">
<center>
<input name="id" type="hidden" size="10" value="<?php echo $query2['id']; ?>" /> <!-- THIS IS HIDDEN VALUE -->
FirstName:<input type="text" name="firstname" value="<?php echo $query2['firstname']; ?>" /><br />
LastName:<input type="text" name="lastname" value="<?php echo $query2['lastname']; ?>" /><br /><br />
UserName:<input type="text" name="username" value="<?php echo $query2['username']; ?>" /><br />
E-Mail:<input type="text" name="email" value="<?php echo $query2['email']; ?>" /><br /><br />
Password:<input type="password" name="password" value="<?php echo $query2['password']; ?>" /><br />
Date_of_Birth:<input type="date" name="dob" value="<?php echo $query2['dob']; ?>" /><br />
Address:<input type="text" name="address" value="<?php echo $query2['address']; ?>" /><br /><br />
ROOMS:<input type="number" name="rooms" value="<?php echo $query2['rooms']; ?>" /><br />
TEL.NO:<input type="number" name="telno" value="<?php echo $query2['telno']; ?>" /><br /><br />
<br />
<input type="submit" name="submit" value="update" />
<center>
</form>
<?php
}
?>
</body>
</html>