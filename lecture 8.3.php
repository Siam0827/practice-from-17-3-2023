<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Form submitted</h1>
	<?php
		echo $_POST["name"]."<br>";
		echo $_POST["username"]."<br>";
		echo $_POST["password"]."<br>";
		echo $_POST["gender"]."<br>";
		echo $_POST["profession"]."<br>";
		echo $_POST["bio"]."<br>";

		$arr = $_POST["hobbies"];

		foreach ($arr as $e) {
			echo "$e <br>";
		}
	?>
</body>
</html>