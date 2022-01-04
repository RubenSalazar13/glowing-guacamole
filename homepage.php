<?php
session_start();
include('functions2.php');
isAllowed();
?>
<!DOCTYPE html>
<html>
 <head>
 	<title>Ruben Travel</title>
<link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet"> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
<link href="css/style.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<?php if ($granted) { 
	   ?>
	   <br>
	<button onclick="window.location.href = 'catalog.php';">Book Now</button>
<div class="background-wrap">   
     <video id="video-bg-elem" preload="auto" autoplay="true" loop="loop" muted="false">
     <source src="video/video2.mp4" type="video/mp4">
</video>
<div class="content">
<h1>Discover the World</h1>
<p>Ruben Travel</p>
<?php
}else{

     echo '<h1>Please Log In</h1>';
}
?>
</div>
</body>
</html>
