<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_id = $_POST['user_id'];
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$category = $_POST['category'];
			
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password,category) values ('$user_id','$user_name','$password','$category')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color:#123456;
		border: none;
	}

	#box{

		background-color:#a24553;
		margin: auto;
		margin-top:160px;
		width: 300px;
		padding: 50px;
		border-radius:20px;
	}
	a{
		color:white;
	}

	</style>

	<div id="box">
		
		<form align="center" method="post">
			<div style="font-size: 35px;margin: 10px;color: white;">Signup</div>
			<input id="text" type="text" name="user_id"  placeholder="enter userid"><br><br>
			<input id="text" type="text" name="user_name"  placeholder="enter username"><br><br>
			<input id="text" type="password" name="password"  placeholder="enter password"><br><br>
			<input id="text" type="text" name="category"  placeholder="enter category"><br><br>
			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>