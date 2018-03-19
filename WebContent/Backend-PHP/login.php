<?php
$conn = new mysqli('localhost','root','');
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
mysqli_select_db($conn,"sample_db");


session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
	// username and password sent from form

	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	$_SESSION['username']=$username;
	
	$sql = "SELECT * FROM login_table WHERE username = '$username' and password = '$password'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);

	// If result matched $myusername and $mypassword, table row must be 1 row

	if($count == 1) {
		//session_register("username");
		$_SESSION['login_user'] = $username;
		 
		header("location: mainmenu.php");
	}else {
		
		echo "<script>alert('Your Login Name or Password is invalid');location.href='index.php'</script>";
		
	}
}
?>



