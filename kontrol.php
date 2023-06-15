<?php
 session_start();
 $kad = $_POST ["kad"];
 $parola =$_POST["parola"];

 
include "connection.php";
$sql ="select * from users where user_name='".$kad."' and password ='".$parola."'";
$result =$conn->query($sql);
if($result->num_rows>0){
	$rs=$result->fetch_object();
		$_SESSION["access"] = "1";
		$_SESSION["yetki"] = $rs->yetki;
		$_SESSION["kad"] = $rs->name;			
		$_SESSION["user_id"] = $rs->id;
		if(isset($_POST["hatirla"])) 
			setcookie("kad",$kad,time() +86400 * 30,"/");
		
		header("location:index.php");
}	else { 
		header('location:login.php?hata=1');
	}





?>
