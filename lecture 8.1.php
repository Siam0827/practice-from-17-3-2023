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

		//associative array
		$arr4= array();

		$arr5= [];
		$arr6= array("ad"=> 34, "ba"=> 34, "cc"=> 34, "nn"=> 34, );


		$arr4["ad"] = "1";
		$arr4["bb"] = "125";

		$arr5[] = "66";
		$arr5[] = "77";

		foreach ($arr4 as $k => $f) 
		{
			echo $k.'=>'.$f.'<br>';
		}

		foreach ($arr4 as $k) 
		{
			echo $k.'<br>';
		}

		foreach ($arr6 as $k => $f) 
		{
			echo "key: $k and value: $f <br>";
		}

		

	?>
</body>
</html>