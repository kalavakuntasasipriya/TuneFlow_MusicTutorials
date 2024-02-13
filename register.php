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
		background-image: url("bg.jpeg");
		background-size: cover;
		background-repeat: no-repeat;
		background-position: left;
	}
	.form
	{
		font-size: 18px;
		padding: 20px;
		width: 100%;
		right:65px;
		position: relative;
		text-align: right;
	}
	.form .btn
	{
		right:130px;
		position: relative;
		text-align: right;
	}
</style>
</head>
<body>
<!--navbar-->
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<a class="navbar-brand" href="website.php"><img src="logo.jpeg" width="50" height="50" style="border-radius: 50%"><font color="white"> Tune Flow</font></a>
	</div>
</nav>
<!--form-->
<center>
	<h1 Style="color: #4B0082;"><u>Register for Singing Contest</u></h1> <br>
</center>

<form class="form" name="myform" id="forms" method="post" action="register1.php" onsubmit="return validatename1() &&  validatename2() && validateage()" >
		First Name : <input type="text" name="name1" placeholder="Enter your First Name..." required><br><br>
		Last Name : <input type="text" name="name2" placeholder="Enter your Last Name..." required><br><br>
		Email ID : <input type="email" name="email" id="gmail" placeholder="Enter your Email ID..."><br><br>
		&nbsp; &nbsp;Age:&nbsp;&nbsp; <input type="number" name="age" id="age" placeholder="Enter your Age here..."><br><br>
		Which language of song you prefer &nbsp; &nbsp; &nbsp;<br> <input type="radio" name="song" id="classical" value="telugu">Telugu songs
					<input type="radio" name="song" id="english" value="english">English songs
					<input type="radio" name="song" id="hindi" value="hindi">Hindi songs
					<input type="radio" name="song" id="other" value="other" checked>Other<br><br>
		<input type="submit" value="SUBMIT" class="btn btn-outline-success">
</form> 
<center><a href="website.php" class="btn btn-warning px-4">Home</a></center>
<script>  
	function validatename1()
	{  
		var name1=document.myform.name1.value;    
		if (name1.length<=3)	
		{  
			alert("First Name must be atleast 4 characters");  
  			return false;  
		}
		return true;
		
	} 
	function validatename2()
	{  
		var name2=document.myform.name2.value;    
		if (name2.length<=3)	
		{  
			alert("Last Name must be atleast 4 characters");  
  			return false;  
		}
		return true;
		
	} 	
	function validateage()
	{
		var x=document.myform.age.value;
		if(x>=16 && x <=25)
		{
			return true;
		}
		else
		{
          		window.alert("You are not eligible for this contest");
			return false;
		}
	}


</script>
</body>
</html>
