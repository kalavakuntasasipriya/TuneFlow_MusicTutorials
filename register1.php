<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>singing</title>

	<!--CDN links-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
		rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	
	<style>
		body
		{
			background-image: url("back3.png");
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			background-attachment: fixed;
		}
		.h1
		{
			display: flex;
			justify-content: center;
			align-items: center;
			color: #FF00FF; 
			top:100px;
			font-size: 80px;
			position: relative;
		}
		.p
		{
			display: flex;
			justify-content: center;
			align-items: center;
			color: white; 
			top:130px;
			font-size: 25px;
			position: relative;
		}
		.q
		{
			display: flex;
			justify-content: center;
			align-items: center;
			color: white; 
			top:130px;
			font-size: 25px;
			position: relative;
		}
		.btn
		{
			display: flex;
			justify-content: center;
			align-items: center;
			top:310px;
			font-size: 30px;
			position: relative;
		}
	</style>
</head>
<body>
<?php
	$handler=mysqli_connect("localhost","root","","website");

	$query1="use website;";
	$result1=mysqli_query($handler,$query1);

	$firstname=$_POST['name1'];
	$lastname=$_POST['name2'];
	$email=$_POST['email'];
	$age=$_POST['age'];
	$song=$_POST['song'];

	$query2="insert into register values('$firstname','$lastname','$email','$age','$song');";
	$resulttable2=mysqli_query($handler,$query2);
?>


<!--navbar-->
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<a class="navbar-brand" href="website.php"><img src="logo.jpeg" width="50" height="50" style="border-radius: 50%"><font color="white"> Tune Flow</font></a>
	</div>
</nav>
<h1 class="h1">REGISTER SUCCESSFUL</h1>
<p class="p">.....We will mail you for more updates.....</p>
<p class="q">Thank You :)</p>
<a href="website.php" class="btn btn-warning px-4">Home</a>
</body>
</html>
