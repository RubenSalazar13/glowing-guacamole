<?php
//1 define constants
if ($_SERVER['HTTP_HOST'] == "localhost")
{
  define("HOST", "localhost");
  define("USER", "root");
  define("PASS", "");
  define("BASE", "rubensal_login");
}
else
{
  define("HOST", "localhost:3306");
  define("USER", "rubenspo_ruben");
  define("PASS", "NEBURS13neburs88!");
  define("BASE", "rubenspo_CATALOG");
}
//2 make a connection
  $con = mysqli_connect(HOST, USER, PASS, BASE);
  ?>