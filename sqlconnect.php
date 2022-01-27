<?php
//1 define constants
if ($_SERVER['HTTP_HOST'] == "localhost")
{
  define("HOST", "");
  define("USER", "");
  define("PASS", "");
  define("BASE", "");
}
else
{
  define("HOST", "");
  define("USER", "");
  define("PASS", "");
  define("BASE", "");
}
//2 make a connection
  $con = mysqli_connect(HOST, USER, PASS, BASE);
  ?>
