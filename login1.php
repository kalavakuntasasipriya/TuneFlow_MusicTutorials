<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


	<style>
		p
		{
			font-size: 20px;
		}
		body
		{
			background-image: url("1.avif");
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			background-attachment: fixed;
		}
		container
		{
			backgroung-color:#7FFFD4;
		}
	</style>
</head>
<body>
<center><marquee direction="left"><div class="h2 text-warning mb-10"><u>Login Here to enter into TUNE FLOW(Music Tutorials)...</u></div></marquee></center>
	<form class = "shadow w-450 p-3" action = "main.php" method = "POST" >
		<div class="container">
			<div class = "d-flex  align-items-center vh-100">
				<div class="mb-10">
					<?php if (isset($_GET['error'])) { ?>
						<p class = "error"><?php echo $_GET['error']; ?></p>
					<?php } ?>
				<div class="mt-20">
<p>
  <span class="glyphicon glyphicon-user text-white"> <label  class="form-label text-white">Username</label></span>
    <input type="text" class="form-control" name="uname" >
</div></p>
<div class="mb-3">
   <p> <span class="glyphicon glyphicon-eye-close  text-white"></span>
<label  class="form-label text-white">Password</label>
    <input type="password" class="form-control" name="password" >
</div>
  </p>
 <p1><button class="btn btn-outline-warning btn-primary">Login Here</button></p1> 
<h4>
<font color="#FFC0CB"><a href = "signup1.php">Dont have an Account </a></font></h4>

</div>
</div>
</div>
</form>
</body>
</html>
