<?php
	session_start();
	if(!isset($_SESSION["loggeduser"]))
	{
		header("Location: lectureF 1.1(login).php");
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
		<h1 align="center"> Welcome <?php echo $_SESSION["loggeduser"];?> </h1>
		<a href="lectureF 1.3(addproduct).php">Add Product</a>
		<a>Add Category</a>
		<a>All Product</a>
	</center>
	<?php

        echo '<h1 style="text-align: center;">Order Your Favourite Foods!</h1>';
        $food1 = array("title"=>"Crispy Chicken Burger", "description"=>"This crispy chicken burger with honey mustard sauce makes for a crunchy goodness, served with potato juice.", "price"=>"690", "id"=>1);

        $food2 = array("title"=>"Mexican Grilled Chicken", "description"=>"Prepared with spicy mexican seasoning marinated grilled chicken leg, served with fried rice & sauteed vegetable.", "price"=>"320", "id"=>2);

        $food3 = array("title"=>"Creamy Mushroom Chicken", "description"=>"Prepared with pan fried chicken breast cooked in creamy garlic mushroom, served with fried rice & sauteed vegetables.", "price"=>"320", "id"=>3);

        $food4 = array("title"=>"Chicken Cordon", "description"=>"Prepared with ham & cheese stuffed fried chicken breast, served with mashed potato & sauteed vegetable.", "price"=>"320", "id"=>4);
      
        $foods = array($food1, $food2, $food3, $food2);
        $float = "float:left";
        $flag = 1;

        foreach ($foods as $item) 
        {
            if ($flag == 1) echo '<div style="text-align: center; width:45rem; margin:0 auto;">';

            echo '            
                <div style="max-width:20rem; border:1px solid black; margin-bottom:30px; padding:10px; ' . $float . '; ">
                    <h3>' . $item['title'] . '</h3>
                    <p>' . $item['description'] . '</p>
                    <h4>Price: ' . $item['price'] . 'tk</h4>
                    <a href="../View/payment.php"><button type="button">Buy</button></a>
                </div>';

            if ($flag !== 1) {
                echo '</div>';
                $flag = 1;
                $float = "float:left";
            } else {
                $flag = 2;
                $float = "float:right";
            }
        }

        echo '<div style="clear: both"><h1>f</h1></div>';
    
   ?>

</body>
</html>