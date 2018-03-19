<html>
<title>main menu</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

<body>
<?php
 
// Create connection
$conn = new mysqli('localhost','root','');
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "";
 
// this will select the Database sample_db
mysqli_select_db($conn,"sample_db");
 
//echo "\n DB is seleted as Test  successfully";
 
// create INSERT query
 
 
$sql="INSERT INTO feedback_table (name,email,phone,priority,message) VALUES ('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[priority]','$_POST[message]')";
 
if ($conn->query($sql) === TRUE) {
  //  echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
mysqli_close($conn);
?>
<h4>The Feedback has been made successfully </h4>
</body>
</html>