<html>
<title>success_registration</title>
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
 
 
$sql="INSERT INTO registration_table (firstname,lastname,username,email,password,sex,dob,address,rooms,telno) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[email]','$_POST[password]','$_POST[sex]','$_POST[dob]','$_POST[address]','$_POST[rooms]','$_POST[telno]')";
 
if ($conn->query($sql) === TRUE) {
  //  echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
mysqli_close($conn);
?>
<h4>The registration has been made successfully </h4>
<p>Click on the below button to login into the account</p> 
<p><a href="/sample/login.php" class="w3-btn w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">CLICK HERE</a></p>
   		


</body>
</html>