<!DOCTYPE html>
<html>
<head>
	<title>main</title>
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

	
</head>
<body>
<div id="container">
<div id="heading">top</div>
<div id="content_menu">menu<br>
<ul>
	<li>check room</li>
	<ol>
		<li><a href="bed_check.php">bedroom</a></li>
		<li><a href="kitchen_check.php">kitchen</a></li>
		<li><a href="living_check.php">living room</a></li>
	</ol>
	<li>set room</li>
	<ol>
		<li><a href="bed_set.html">bedroom</a></li>
		<li><a href="kitchen_set.html">kitchen</a></li>
		<li><a href="living_set.html">living room</a></li>
	</ol>
	<li>profile</li>
	<li>exit</li>
</ul>
</div>
<div id="content_body">content</div>
<div id="footing">bottom</div>


	
</div>


</body>
</html>