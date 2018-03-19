<?php

$conditioner_living=$_POST['conditioner_living'];
$humidifier_living=$_POST['humidifier_living'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

//echo $conditioner1;
$sql="INSERT INTO `room_set` ( `room_name`, `conditioner`, `humidifier`, `time`) VALUES ('living room', '$conditioner_living', '$humidifier_living', CURRENT_TIMESTAMP) ";

if (mysqli_query($conn, $sql)) {
	echo "<script>alert('success');location.href='mainmenu.php'</script>";
} else {
	echo "Error updating record: " . mysqli_error($conn);
}






echo mysql_error();

?>
