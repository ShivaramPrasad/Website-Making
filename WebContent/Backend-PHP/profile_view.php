<?php 

session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>PROFILE_VIEW</title>
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


<div id="content_menu">menu<br>
<ul>
		<li>check room</li>
	<ol>
		<li><a href="bed_check.php">bedroom</a></li>
		<li><a href="kitchen_check.php">kitchen</a></li>
		<li><a href="living_check.php">living room</a></li>
		<li><a href="new_check.php">new rooms check</a></li>
	</ol>
	<li>set room</li>
	<ol>
		<li><a href="bed_set.html">bedroom</a></li>
		<li><a href="kitchen_set.html">kitchen</a></li>
		<li><a href="living_set.html">living room</a></li>
		<li><a href="set_number.html">set new room</li>
	</ol>
	<li><a href="profile_view.php">my profile</a></li>
	<li><a href="mainmenu.php">exit</li>
</ul>
</div>
<div id="content_body">content</br>

<?php
//session_start();
$username=$_SESSION['username'];

$servername = "localhost";
$username1 = "root";
$password = "";
$dbname = "sample_db";

$conn = mysqli_connect($servername, $username1, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
$query = "SELECT * FROM registration_table WHERE username='$username' ";
//echo $query;
$result = mysqli_query($conn,$query);
//echo "111111";
//print_r($result);
//echo "22222";
//echo mysqli_error();
//while($row = mysql_fetch_array($result))
while($result_arr=mysqli_fetch_array($result))
{
$id=$result_arr['id'];
echo "id: $id </br>";

$firstname=$result_arr['firstname'];
echo "firstname: $firstname </br>";

$lastname=$result_arr['lastname'];
echo "lastname: $lastname </br>";

$username=$result_arr['username'];
echo "username: $username </br>";

$email=$result_arr['email'];
echo "email: $email </br>";

$password=$result_arr['password'];
echo "password: $password </br>";






$sex=$result_arr['sex'];
if($sex==1){
	echo "gender: male </br>";
}
else{
	echo "gender: female</br>";
}

$dob=$result_arr['dob'];
echo "dob: $dob </br>";

$address=$result_arr['address'];
echo "address: $address </br>";

$rooms=$result_arr['rooms'];
echo "rooms: $rooms </br>";

$phone=$result_arr['telno'];
echo "phone: $phone </br>";

}

?>
</div>
</div>


</body>
</html>