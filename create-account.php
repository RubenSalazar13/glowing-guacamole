<?php
//******/opt/lampp/bin/mysql -uroot -p1550//******

//1 define constants
if ($_SERVER['HTTP_HOST'] == "localhost")
{
  define("HOST", "localhost");
  define("USER", "root");
  define("PASS", "1550");
  define("BASE", "passwordHashing");
}
else
{
  define("HOST", "localhost:3306");
  define("USER", "rubensal_Ruben");
  define("PASS", "NEBURS13neburs88!");
  define("BASE", "rubensal_login");
}
//2 make a connection
  $con = mysqli_connect(HOST, USER, PASS, BASE);

session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <link href="css/style.css" type="text/css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <script src="js/name.js"></script>
</head>
<body>
  <img class="wave" src="img/wave.jpg">
  <div class="container">
    <div class="img">
      <img src="img/bg.svg">
    </div>
    <div class="login-content">

     <?php
     /*if ($msg != "") echo $msg . "<br><br>"; */
     if(!isset($_GET['s']) || $_GET['s'] != "true") :?>

      <form action="?s=true" method="post">
        <img src="img/logo.png">
        <h2 class="title">Please Create an Account</h2>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Username</h5>
                    <input type="text" name="username" class="input" required>
                 </div>
              </div>
              <div class="input-div pass">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5>Password</h5>
                    <input oninput="validate(this);" name="password" id="password" type="password" class="input" required="">
                 </div>
              </div>
               <p id="pswd"></p><br>
              <div class="input-div pass2">
                 <div class="i"> 
                <i class="fas fa-lock"></i>
                 </div>
              <div class="div">
                    <h5>Verify Password</h5>
                    <input oninput="validate(this);" id="password2" name="password2" type="password" class="input" required="">
                 </div>
                </div>
                <p id="pswd2"></p><br>
                <input type="submit" id="sub-but" class="btn" value="Create Account" name="newlogin" disabled>
              <input type="reset" autocomplete="off" class="btn" value="reset">
            </form>
          <?php else :
        if (isset($_POST['username']) && $_POST['username'] !="" && isset($_POST['password']) && $_POST['password2'] !="")
        {
  $username = strip_tags($_POST['username']);
  $password = strip_tags($_POST['password']);

  $username = stripslashes($username);
  $password = stripcslashes($password);

  $username = mysqli_real_escape_string($con, $username);
  $password = mysqli_real_escape_string($con, $password);

          $salt = "rumpel".$password."stiltskin";
         
          $hashed = hash('SHA512', $salt);

          $sql = "SELECT * FROM users WHERE username='$username'";
          $sql2 = "INSERT INTO users (username, password) VALUES ('$username', '$hashed');";
          $checkuser = mysqli_query($con,$sql);
         if (mysqli_num_rows($checkuser) > 0) {
          //header('location: create-account.php');\
          echo "<h2>User Name is Already in Use,Choose Another</h2>";
                  	?>
            <form action="create-account.php" method="post">      	
         	<div class="errorbutton"><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <input type="submit" class="btn" value="Retry" name="return">
                 </div>
              </div>
          </form>
         	<?php
         }else {
          mysqli_query($con,$sql2);
          header('location: index.php');
          }
        }
        
        endif;
        ?>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>