<?php
session_start();
include('functions2.php');
include('cartcountfunction.php');
isAllowed();
?>

<!DOCTYPE html>
<html>
 <head>
<title>Product</title>
<link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet"> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
<link href="css/style.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php if ($granted) { 
    include('header.php');
    echo "<h2>Product</h2>";
    ?>
</head>
  <body>
<?php
  include('functions.php');
    ?>
    <main>
<center>
<main>
<div id="product">	</div>
<br>
<p>“It liberates the vandal to travel — you never saw a bigoted, opinionated, stubborn, narrow-minded, self-conceited, almighty mean man in your life but he had stuck in one place since he was born and thought God made the world and dyspepsia and bile for his especial comfort and satisfaction.”</p>
<br><p>-Mark Twain</p>
</main>
  <div class="footer">
     <i class = "fas fa-globe"></i> Ruben Travel</i>
    <p>find us on the web</p>
    <div class="wrapper">
    <a target="_blank" href="your_url_here"><i class="fa fa-3x fa-twitter-square"></i>
    <a target="_blank" href="your_url_here"><i class="fa fa-3x fa-google-plus"></i></a>
  <a target="_blank" href="https://www.facebook.com/Ruben-Travel-107651977523043/?modal=admin_todo_tour"><i class="fa fa-3x fa-facebook-square"></i></a>
  <a target="_blank" href="https://www.instagram.com/ruben__travel/?hl=en"><i class="fa fa-3x fa-instagram"></i></a></div>
  </center>
  <?php
}else{

     echo '<h1>Please Log In</h1>';
}
?>
</body>
</html>