<!DOCTYPE html>
<?php
		$x =12;
		$y =12;
		$z = $x+$y;

		function global_test()
		{
			global $z;
			$m = 12;
			$n = $z + $m;
			print "$n";
		}

		function print_hello()
		{
			print "Hello World";
		}

		function add($x ,$y)
		{
			$sum = $x + $y;
			return $sum;
		}

		$name = "siam ibne";
		echo "<h1> Hello World /".$z." $z</h1>";
		echo '<h1> Hello World /'.$z.' $z</h1>';
		echo strlen("siam");
		echo str_word_count("siam ibne");
		echo strrev("siam ibne");
		$pos = strpos($name, "i");
		$pos2 = strpos($name, "i", $pos+1);
		echo $pos;
		echo $pos2;
		if($z >50)
		{
			$m =15;
		}

		$a = 10;
		$b = "10";
		if($a == $b)
		{
			echo "Same";
		}

		else
		{
			echo "not Same";
		}

		if($a === $b)
		{
			echo "Same";
		}

		else
		{
			echo "not Same";
		}


	?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	This is plain html <?php echo $z;?> and m = <?php echo $m;?>

	

	<?php 
		$n = 9;
		$o = 10;


	?>
    this is end and calculated result is <?php echo $n+$o;?>
	<?php

		$x =12;
		$y =12;
		$z = $x+$y;
		echo "<h1> Hello World /".$z." $z</h1>";
		echo '<h1> Hello World /'.$z.' $z</h1>';


	?>
	this is  A fuction call
	<?php 
		print_hello();
	?>

	this is  A add fuction call
	<?php 
		print ADD(5, 6);
        global_test();

	?>

</body>
</html>