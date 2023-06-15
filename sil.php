<?php

include "session_control.php";

include "connection.php";
$sql = "delete from users where id=" . $_GET["id"];
$conn->query($sql);
header("location:users.php");
