<?php
session_start();
include "../session_control.php";
include "../connection.php";

$sql = "delete from posts where id =".$_GET["id"];
$conn->query($sql);

		header("location:index.php");
