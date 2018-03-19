<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}


$roomname=$_POST['roomname'];
$type=$_POST['type'];
$unit=$_POST['unit'];
$type1=$_POST['type1'];
echo "$roomname";
echo "$type";
echo "$unit";
if($type=='temperature'){
$result="INSERT INTO `room` (`room_id`, `room_name`, `type`, `value`, `unit`, `date`) VALUES (NULL, '$roomname', '$type', NULL, 'degree', CURRENT_TIMESTAMP)";

echo"test";
if($conn->query($result))
{
	echo "<script>alert('Record updated successfully');location.href='new_check.php'</script>";

}
}
//echo "test";
if($type=='humidificateur'){
$result="INSERT INTO `room` (`room_id`, `room_name`, `type`, `value`, `unit`, `date`) VALUES (NULL, '$roomname', '$type', NULL, '%', CURRENT_TIMESTAMP)";
if($conn->query($result))
{
	echo "<script>alert('Record updated successfully');location.href='new_check.php'</script>";

}
}

if($type=='other'){
	$result="INSERT INTO `room` (`room_id`, `room_name`, `type`, `value`, `unit`, `date`) VALUES (NULL, '$roomname', '$type1', NULL, '$unit', CURRENT_TIMESTAMP)";
	if($conn->query($result))
	{
		echo "<script>alert('Record updated successfully');location.href='new_check.php'</script>";
	
	}
}
//echo mysqli_error();
?>
