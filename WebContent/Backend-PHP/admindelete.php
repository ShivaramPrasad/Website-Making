<html>
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
$sql="DELETE FROM registration_table WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

if($sql)
{
header('location:viewuser.php');
}
}
?>
</body>
</html>