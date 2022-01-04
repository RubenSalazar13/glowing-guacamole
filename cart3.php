<?php

//start session
session_start();

include('db.php');
include('component.php');

//create instance of Createdb class
$database = new CreateDb("CATALOG","PRODUCT");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'cart.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}

?>

<!DOCTYPE html>
<html>
 <head>
<title>Cart</title>
<link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet"> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
<link href="css/style.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

	<?php
	include('header.php');
	include('functions.php');
    ?>
    <h2>Cart</h2>
    <center>
	<div class="container2">
		<div class="row text-center py-5">
         <?php
         $result = $database->getData();
         while($row = mysqli_fetch_assoc($result)){
           component($row['image'],$row['ProductPrice'],$row['Description'],$row['ProductName'],$row['ProductID']);
         }
        ?>
	</div>
</div>
	<main>
</main>
	<div class="footer">
	  <p>ℝ𝕦𝕓𝕖𝕟 𝕋𝕣𝕒𝕧𝕖𝕝</p>
	  <p>find us on the web</p>
	  <div class="wrapper">
	  <a target="_blank" href="your_url_here"><i class="fa fa-3x fa-twitter-square"></i>
	  <a target="_blank" href="your_url_here"><i class="fa fa-3x fa-google-plus"></i></a>
	  <a target="_blank" href="your_url_here"><i class="fa fa-3x fa-facebook-square"></i></a>
	  <a target="_blank" href="your_url_here"><i class="fa fa-3x fa-instagram"></i></a>
	  </div>
  </center>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
