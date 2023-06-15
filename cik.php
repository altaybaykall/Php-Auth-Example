<?php
session_start();
session_destroy();

	unset($_COOKIE['kad']); 
    setcookie('kad', null, -1, '/');

	unset($_COOKIE['kad1']); 
    setcookie('kad1', null, -1, '/');

header("location:login.php");

?>
