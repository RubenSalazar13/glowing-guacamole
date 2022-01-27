<?php

function isAllowed($username="", $password="")
{
	global $granted;
	$granted = false;
	$salt = "rumpel".$password."stiltskin";
    $hashed = hash('SHA512', $salt);

	if(isset($_SESSION['chip']))
	{
		$granted = true;
	}
	else
    {
  $con = mysqli_connect("", "", "", "");
  //$con = mysqli_connect("localhost", "root", "1550", "passwordHashing");
  $sql = "SELECT * FROM users WHERE username = '$username';";
  $query = mysqli_query($con, $sql);
  $granted = mysqli_num_rows($query);

	if ($granted)
	{
		$_SESSION['chip'] = 'granted';
	}
  }


}
?>
