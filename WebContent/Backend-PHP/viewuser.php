<!DOCTYPE html>
<html>
<head>
<title>VIEW_USER</title>
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

<?php
$server = 'localhost';

$user = 'root';

$pass = '';

$db = 'sample_db';
// connect to the database
$mysqli = new mysqli($server, $user, $pass, $db);

// show errors (remove this line if on a live site)
mysqli_report(MYSQLI_REPORT_ERROR);

if ($result = $mysqli->query("SELECT * FROM registration_table"))
{
	// display records if there are records to display
	if ($result->num_rows > 0)
	{

			// display records in a table
		echo "<table border='1' cellpadding='6'>";


		echo "<tr> <th>ID</th> <th>FirstName</th> <th>LastName</th> <th>Username</th> <th>E-Mail</th> <th>Password</th> <th>Sex</th> <th>Date_of_Birth</th> <th>Address</th> <th>No.Of.Rooms</th> <th>Contact_No</th><th></th><th></th> </tr>";
		
		
		while ($row = $result->fetch_object())
		{
			// set up a row for each record

			echo "<tr>";
			
			echo "<td>" . $row->id . "</td>";
echo "<td>" . $row->firstname . "</td>";
echo "<td>" . $row->lastname . "</td>";
echo "<td>" . $row->username . "</td>";
echo "<td>" . $row->email . "</td>";
echo "<td>" . $row->password . "</td>";
echo "<td>" . $row->sex . "</td>";
echo "<td>" . $row->dob . "</td>";

echo "<td>" . $row->address . "</td>";
echo "<td>" . $row->rooms . "</td>";
echo "<td>" . $row->telno . "</td>";
echo "<td><a href='adminedit.php?id=" . $row->id . "'>Edit</a></td>";
echo "<td><a href='admindelete.php?id=" . $row->id . "'>Delete</a></td>";
						echo "</tr>";
		}

		echo "</table>";
		
	}
	// if there are no records in the database, display an alert message
	else
	{
		echo "No results to display!";
	}
}
// show an error if there is an issue with the database query
else
{
	echo "Error: " . $mysqli->error;
}

// close database connection
$mysqli->close();

?>
</body>
</html>