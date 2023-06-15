<?php

session_start();
if(!isset($_SESSION["access"]))
	header("location.php?hata=2");

include "connection.php";
if($_GET["i"]=="insert"){
	$name=$_POST["name"];
	$uname=$_POST["user_name"];
	$pass=$_POST["password"];
	
	$sql = "insert into users set name='".$name."',user_name='".$uname."',password='".$pass."'";
	$conn->query($sql);
	header("location:login.php");
}
 elseif($_GET["i"]=="update"){
	$name = $_POST["name"];
	$uname = $_POST["user_name"];
	//$pass = $_POST["password"]; 
	
	$sql = "update users set name='".$name."', user_name='".$uname."' where id=".$_GET["id"];
	$conn->query($sql);
	header("location:index.php");
}