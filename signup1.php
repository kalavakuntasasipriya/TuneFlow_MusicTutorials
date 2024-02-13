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
		p1
		{
			font-size: 25px;
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
<div class="container">
<div class="mt-5">
<center><span class="text-warning h1">Create an Account for TUNE FLOW(Music Tutorials)</span></center>
<div class = "d-flex  align-items-center vh-100">
<form class = "shadow w-450 p-3" action = "#" method = "POST" >



<?php if (isset($_GET['error'])) { ?>
     <p class = "error"><?php echo $_GET['error']; ?></p>
<?php } ?>




<?php if (isset($_GET['success'])) { ?>
     <p class = "success"><?php echo $_GET['success']; ?></p>
<?php } ?>



 <label  class="form-label text-white">Name</label>
<?php if (isset($_GET['name'])) { ?>
       <input type="text" class="form-control" 
                          name="name"
                           value = "<?php echo $_GET['name']; ?>" ><br>
<?php }else{ ?>
       <input type="text" class="form-control" 
                          name="name" ><br>
   <?php }?>

  


 <span class="glyphicon glyphicon-user text-white"><label  class="form-label">User name</label></span>
<?php if (isset($_GET['uname'])) { ?>
       <input type="text" class="form-control" 
                          name="uname"
                           value = "<?php echo $_GET['uname']; ?>" ><br>
<?php }else{ ?>
       <input type="text" class="form-control" 
                          name="uname" ><br>
   <?php }?>

    


 <div class="mb-3">
    <span class="glyphicon glyphicon-eye-close  text-white">  <label  class="form-label">Password</label></span>
    <input type="password" 
           class="form-control" 
           name="password"  >
</div>

<div class="mb-3">
   <span class="glyphicon glyphicon-eye-close  text-white">   <label  class="form-label">Re_Password</label></span>
    <input type="password" 
           class="form-control" 
           name="re_password" >
</div>
  
  
<font color="#FF1493"><h4>Already have an account?</h4></font>
<p1><span class="px-8"><a href = "login1.php">Login Here</a></span></p1>

</form>
<div>
<div>
</body>
</html>
