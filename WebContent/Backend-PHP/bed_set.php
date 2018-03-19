<?php

$conditioner1=$_POST['conditioner1'];
$humidifier1=$_POST['humidifier1'];

$conditioner2=$_POST['conditioner2'];
$humidifier2=$_POST['humidifier2'];

$conditioner3=$_POST['conditioner3'];
$humidifier3=$_POST['humidifier3'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql1="UPDATE `room_set` SET `conditioner` = $conditioner1, `humidifier` = $humidifier1 WHERE `room_set`.`id` = 1";
$sql2="UPDATE `room_set` SET `conditioner` = $conditioner2, `humidifier` = $humidifier2 WHERE `room_set`.`id` = 2";
$sql3="UPDATE `room_set` SET `conditioner` = $conditioner3, `humidifier` = $humidifier3 WHERE `room_set`.`id` = 3";


if (mysqli_query($conn, $sql1)) {
	if (mysqli_query($conn, $sql2)) {
		if (mysqli_query($conn, $sql3)) {
			echo "<script>alert('success');location.href='mainmenu.php'</script>";
				
		}
	}
	} else {
	echo "Error updating record: " . mysqli_error($conn);
}


echo mysql_error();

?>
