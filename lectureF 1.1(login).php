<?php
	session_start();
	$username="";
	$err_username="";
	$password="";
	$err_password="";

	$hasError=false;

	$users = array("siam"=>"1234", "siam1"=>"1234", "siam2"=>"1234");

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{

		if(empty($_POST["username"]))
		{
			$err_username="*Username Required ";
			$hasError = true;
		}
		else
		{
			$username=$_POST["username"];
		}


		if(empty($_POST["password"]))
		{
			$err_password="*Password Required ";
			$hasError = true;
		}
		else
		{
			$password=$_POST["password"];
		}

		if(!$hasError)
		{
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";

			foreach($users as $u => $p)
			{
				if($username == $u && $password == $p)
				{
					$_SESSION["loggeduser"]=$username;
					header("Location: lectureF 1.2(dashboard).php");
				}
			}
			echo "Invalid User";

		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>
		<h1>Welcome to BearBurger!</h1><br>
        <h3>User Login</h3>
		<fieldset>
			<div style="border:1px solid ">
				<form action="" method="post">
					<table border="1">
								<tr>
									<td>Username: </td>
									<td><input type="text" name="username" value="<?php echo $username;?>" placeholder="Username"> </td>
									<td><span style="color: red"><?php echo $err_username;?> </span> </td>
								</tr>

								<tr>
									<td>Password: </td>
									<td><input type="password" name="password" value="<?php echo $password;?>" placeholder="Password"> </td>
									<td><span style="color: red"><?php echo $err_password;?> </span> </td>
								</tr>

								<tr>
									<td align="center" colspan="3"><input type="submit" name="login" value="Login"> </td>
								</tr>

							</table>
				            
				            <span style="float:left;">New here? <a href="lecture 9.2(register).php">Register</a></span>
				            <span style="float:right;"><a href="recover.php">Forgot Password</a></span>
				            
					
				</form>
			</div>
		</fieldset>
	</center>
	
</body>
</html>