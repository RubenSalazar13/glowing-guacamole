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
<link href="css/" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<?php if ($granted) { 
	   ?>
<center>
<h1>Thank You for Your Order!</h1>
<br>
<h2>We have your order.</h2>

<p>an email confirmation will be sent shortly.</p>
<br>
<p>Your order will appear in your account once it has been confirmed.</p>
<br><br>
<form method="post" action="loggedout.php" enctype="multipart/form-data">
<button type="submit" class="btn btn-outline-info">My Account</button>
</form>
</center>
<?php
}else{

     echo '<h1>Please Log In</h1>';
}?>
</div>
</body>
</html>
