<?php

	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
	$gender="";
	$err_gender="";
	$profession="";
	$err_profession="";
	$hobbies=[];
	$err_hobbies="";
	$comment="";
	$err_comment="";

	$hasError = false;

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{

		if(empty($_POST["name"]))
		{
			$err_name="* Name Required";
			$hasError = true;
		}
		elseif(strlen($_POST["name"]) < 2)
		{
			$err_name="Name must be grater than 2";
			$hasError = true;
		}
		else
		{
			$name=$_POST["name"];
		}


		if(empty($_POST["username"]))
		{
			$err_username="* Username Required";
			$hasError = true;
		}
		elseif(strlen($_POST["username"]) < 2)
		{
			$err_username="* Username must be grater than 2";
			$hasError = true;
		}
		else
		{
			$name=$_POST["username"];
		}


		if(empty($_POST["password"]))
		{
			$err_password="* Password Required";
			$hasError = true;
		}
		elseif(strlen($_POST["password"]) < 2)
		{
			$err_password="* Password must be grater than 2";
			$hasError = true;
		}
		else
		{
			$password=$_POST["password"];
		}

		if(!isset($_POST["gender"]))
		{
			$err_gender = "* Gender Required";
			$hasError = true;
		}
		else
		{
			$gender = $_POST["gender"];
		}

		if(!isset($_POST["hobbies"]))
		{
			$err_hobbies="* Hobbies Required";
			$hasError = true;
		}
		else
		{
			$hobbies=$_POST["hobbies"];
		}

		if(empty($_POST["comment"]))
		{
			$err_comment = "* Comment Required";
			$hasError = true;
		}
		else
		{
			$comment=$_POST["comment"];
		}

		if(!$hasError)
		{
			echo $_POST["name"]."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["profession"]."<br>";
			$arr = $_POST["hobbies"];

			foreach ($arr as $e) 
			{
				echo "$e <br>";
			}

			echo $_POST["comment"]."<br>";
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
	<fieldset>
		<div style="border:1px solid ">
			<form action="" method="post">
				<table border="1">
					<tr>
						<td>Name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"> </td>
						<td><span style="color: red"><?php echo $err_name;?> </span> </td>
					</tr>

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
						<td>Gender: </td>
						<td><input type="radio" value="Male" <?php if($gender =="Male") echo "checked";?> name="gender"> Male <input type="radio" value="Female" <?php if($gender =="Female") echo "checked";?> name="gender"> Female </td>
						<td><span style="color: red"><?php echo $err_gender;?> </span> </td>
					</tr>

					<tr>
						<td>Profession: </td>
						<td>
							<select name="profession" >
								<option>Teaching</option>
								<option>Service</option>
								<option>Business</option>
								<option>Entreprenuer</option>
							</select> 
						</td>
						<td><span style="color: red"><?php echo $err_profession;?> </span> </td>
					</tr>

					<tr>
						<td>Hobbies: </td>
						<td>
							<input type="checkbox" value="Movies" name="hobbies[]"> Movies
							<input type="checkbox" value="Music"name="hobbies[]"> Music <br>
							<input type="checkbox" value="Sports" name="hobbies[]"> Sports
							<input type="checkbox" value="Games" name="hobbies[]"> Games 
						</td>
						<td><span style="color: red"><?php echo $err_hobbies;?> </span> </td>
					</tr>

					<tr>
						<td>Comment: </td>
						<td>
							<textarea name="comment" > <?php echo $comment;?> </textarea>
						</td>
						<td><span style="color: red"><?php echo $err_comment;?> </span> </td>
					</tr>

					<tr>
						<td align="center" colspan="3"><input type="submit" value="Register"> </td>
					</tr>

				</table>
			</form>
   		</div>
	</fieldset>
	</center>
</body>
</html>

