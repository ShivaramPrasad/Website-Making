<?php

$conditioner_kitchen=$_POST['conditioner_kitchen'];
$humidifier_kitchen=$_POST['humidifier_kitchen'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql="UPDATE `room_set` SET `conditioner` = $conditioner_kitchen, `humidifier` = $humidifier_kitchen WHERE `id` = 4";
if (mysqli_query($conn, $sql)) {
	echo "<script>alert('success');location.href='mainmenu.php'</script>";
} else {
	echo "Error updating record: " . mysqli_error($conn);
}

echo mysql_error();

?>
