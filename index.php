<?php
//******/opt/lampp/bin/mysql -uroot -p1550//******
session_start();
include_once('functions2.php');
include_once('sqlconnect.php');

if(isset($_POST['login'])) {
  $username = strip_tags($_POST['username']);
  $password = strip_tags($_POST['password']);

  $username = stripslashes($username);
  $password = stripcslashes($password);

  $username = mysqli_real_escape_string($con, $username);
  $password = mysqli_real_escape_string($con, $password);

  $salt = "rumpel".$password."stiltskin";
 
  $hashed = hash('SHA512', $salt);

  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$hashed'";
  $query = mysqli_query($con, $sql);

if(mysqli_num_rows($query) > 0)

{
  //Records matched process further
  $_SESSION['username'] = $username;
  $_SESSION['id'] = $id;
  isAllowed($username, $id);
  header('location: homepage.php');
 
 } else {
    echo "<h1>You'r Credentials Are Incorrect, Please Try Again...</h1>";
    }
  } 

?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <link href="css/style.css" type="text/css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
  <img class="wave" src="img/wave.jpg">
  <div class="container">
    <div class="img">
      <img src="img/bg.svg">
    </div>
    <div class="login-content">
      <form method="post" action="index.php" enctype="multipart/form-data">
        <img src="img/logo.png">
        <h2 class="title">Welcome</h2>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Username</h5>
                    <input type="text" name="username" class="input">
                 </div>
              </div>
              <div class="input-div pass">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5>Password</h5>
                    <input name="password" type="password" placeholder="" class="input">
                 </div>
              </div>
              <a href="create-account.php">Create Account</a>
              <input type="reset" autocomplete="off" class="btn" value="reset">
              <input type="submit" class="btn" value="Login" name="login">
            </form>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>