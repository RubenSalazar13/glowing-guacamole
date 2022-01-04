<?php
session_start();
include('functions2.php');
include('cartcountfunction.php');
isAllowed();
?>

<!DOCTYPE html>
<html>
 <head>
<title>Catalog</title>
<link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet"> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
<link href="css/style.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<?php if ($granted) { 
    include('header.php');
    echo "<h2>Catalog</h2>";
    ?>
</head>
  <body>
<?php
  include('functions.php');
    ?>
    <main>
      <div id="catalog">  
<h2><br><br><br><br>
<span>Another reason why people love to travel:<span class='spacer'></span><br /><span class='spacer'></span>it helps open your mind.</span> <!-- span tag to beautify it efficiently -->
</h2> <!-- the text -->
      </div>
    <center>
  <div class="container2">
    <div class="row text-center py-25">
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
     <i class = "fas fa-globe"></i> Ruben Travel
    </i>
    <p>find us on the web</p>
    <div class="wrapper">
    <a target="_blank" href="your_url_here"><i class="fa fa-3x fa-twitter-square"></i>
    <a target="_blank" href="your_url_here"><i class="fa fa-3x fa-google-plus"></i></a>
  <a target="_blank" href="https://www.facebook.com/Ruben-Travel-107651977523043/?modal=admin_todo_tour"><i class="fa fa-3x fa-facebook-square"></i></a>
  <a target="_blank" href="https://www.instagram.com/ruben__travel/?hl=en"><i class="fa fa-3x fa-instagram"></i></a></div>
    
  </center>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<?php
}else{

     echo '<h1>Please Log In</h1>';
}
?>
</body>
</html>