<?php
require_once 'function.php'
?>
<!DOCTYPE html>
<html>
<head>
<title>NEWCHECK_ROOM</title>
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
	<li><a href="mainmenu.php">exit</a></li>
</ul>
</div>
<div id="content_body">content</br>

<table style='text-align:center;' border='1'>
<tr><th>name</th><th>type</th><th>value</th><th>date</th></tr>


<?php
$conn =connectDb();
$sql="SELECT * FROM `room` WHERE room_name!='bedroom1' AND room_name!='bedroom2' AND room_name!= 'bedroom3' AND room_name!='kitchen' AND room_name!='living_room' ";
$result = mysqli_query($conn,$sql);
$dataCount=mysqli_num_rows($result);
echo mysql_error();


for($i=0;$i<$dataCount;$i++){

	$result_arr=mysqli_fetch_assoc($result);
	$room_name=$result_arr['room_name'];
	$type=$result_arr['type'];
	$value=$result_arr['value'];
	$unit=$result_arr['unit'];
	$date=$result_arr['date'];

	echo "<tr><td>$room_name</td><td>$type</td><td>$value $unit</td><td>$date</td></tr>";


	//print_r($result_arr);
}

?>
</table>

</br>






</div>
</div>

</body>
</html>