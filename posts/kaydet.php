<?php
session_start();
include "../session_control.php";
include "../connection.php";
if(isset($_GET["i"])){
	if($_GET["i"]=="yeniKayit"){
		$sql = "insert into posts set 
		title='".$_POST["title"]."',
		description='".$_POST["description"]."',
		category_id=".$_POST["category_id"];
		
		$conn->query($sql);
		header("location:index.php");
		
	}elseif($_GET["i"]=="update"){
		
		$sql = "update posts set 
		title='".$_POST["title"]."',
		description='".$_POST["description"]."',
		category_id=".$_POST["category_id"].
		" where id=".$_GET["id"];
		
		$conn->query($sql);
		header("location:index.php");
		
	}
	
}


 ?> 