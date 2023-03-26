<?php
	session_start();
	if(!isset($_SESSION["loggeduser"]))
	{
		header("Location: lectureF 1.1(login).php");
	}
?>
<?php
	$id="";
	$err_id="";
	$name="";
	$err_name="";
	$price="";
	$err_price="";
	$quantity="";
	$err_quantity="";
	$comment="";
	$err_comment="";

	$hasError = false;

	

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{


		if(empty($_POST["id"]))
		{
			$err_id="* id Required";
			$hasError = true;
		}
		elseif(strlen($_POST["id"]) < 2)
		{
			$err_id="* id must be grater than 2";
			$hasError = true;
		}
		else
		{
			$id=$_POST["id"];
		}


		if(empty($_POST["name"]))
		{
			$err_name="*Name Required";
			$hasError = true;
		}
		elseif(strlen($_POST["name"]) < 2)
		{
			$err_name="*Name must be grater than 2";
			$hasError = true;
		}
		else
		{
			$name=$_POST["name"];
		}


		if(empty($_POST["price"]))
		{
			$err_price="*price Required";
			$hasError = true;
		}
		elseif(strlen($_POST["price"]) < 2)
		{
			$err_price="*price must be grater than 2";
			$hasError = true;
		}
		else
		{
			$price=$_POST["price"];
		}


		if(empty($_POST["quantity"]))
		{
			$err_quantity="*Quantity Required";
			$hasError = true;
		}
		elseif(strlen($_POST["quantity"]) < 2)
		{
			$err_quantity="*Quantity must be grater than 2";
			$hasError = true;
		}
		else
		{
			$quantity=$_POST["quantity"];
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
			echo $_POST["id"]."<br>";
			echo $_POST["name"]."<br>";
			echo $_POST["price"]."<br>";
			echo $_POST["quantity"]."<br>";
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
		<h1> Welcome <?php echo $_SESSION["loggeduser"];?> </h1>
		<h1>Create a Product</h1>
		<fieldset>
			<div style="border:1px solid ">
				<form action="" method="post">
					<table border="1">
								<tr>
									<td>ID: </td>
									<td><input type="text" name="id" value="<?php echo $id;?>" placeholder="ID"> </td>
									<td><span style="color: red"><?php echo $err_id;?> </span> </td>
								</tr>

								<tr>
									<td>Name: </td>
									<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"> </td>
									<td><span style="color: red"><?php echo $err_name;?> </span> </td>
								</tr>

								<tr>
									<td>Price: </td>
									<td><input type="text" name="price" value="<?php echo $price;?>" placeholder="Price"> </td>
									<td><span style="color: red"><?php echo $err_price;?> </span> </td>
								</tr>

								<tr>
									<td>Quantity: </td>
									<td><input type="text" name="quantity" value="<?php echo $quantity;?>" placeholder="Quantity"> </td>
									<td><span style="color: red"><?php echo $err_quantity;?> </span> </td>
								</tr>

								<tr>
									<td>Comment: </td>
									<td>
									<textarea name="comment" > <?php echo $comment;?> </textarea>
									</td>
									<td><span style="color: red"><?php echo $err_comment;?> </span> </td>
								</tr>

								<tr>
									<td align="center" colspan="3"><input type="submit" value="Add Product"> </td>
								</tr>

							</table>
				            
				</form>
			</div>
		</fieldset>
	</center>
	

</body>
</html>