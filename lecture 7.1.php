<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
		$arr = array();
		$arr2 = [];

		$arr3 = array("tanvir" , "sabbir", "karim");
		$arr3[3] = "rafiq";
		$arr3[4] = "tafiq";
		$arr3[] = "afiq";
		$arr3[] = "fiq";
		$arr[] = 1;
		$arr[] = 125;

		$arr2[] = "as";
		$arr2[] = "rs";


		echo "$arr3[1], ";
		echo "$arr3[4], ";
		echo "$arr3[5], ";
		echo "$arr3[6], <br>";
		echo "$arr[0], ";
		echo "$arr[1], <br>";

		echo "$arr2[0], ";
		echo "$arr2[1], <br>";

		for($i=0;$i<count($arr3);$i++)
		{
			echo $arr3[$i].'<br>';
		}

		foreach ($arr3 as $e) 
		{
			echo $e.'<br>';
		}
	?>
</body>
</html>