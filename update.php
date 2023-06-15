


<html>
	<head>
		<style>
				body{
					background:#f0f0f0;
				}
				.loginTable{
					background:#fff;
					border:1px solid #d0d0d0;
					width:500px;
					margin:50px auto;
					padding: 30px;
				}
				.btn {
					background: darkgreen;
					color:white;
					border:1px solid green;
					margin-top:10px;
					padding:10px;
				}
				.alert{ 
					background:#ffbbbb; 
					border:1px solid red;
					padding:10px;
					margin-bottom:20px;
					text-align:center
				}
		</style>
	</head>
	
	<body>
	<?php
	session_start();
	if(isset($_COOKIE["kad"])){
		$_SESSION["access"] = "1";
		$_SESSION["kad"] = $_COOKIE["kad"];
		header("location:index.php");
		
	}
	include "connection.php";
	$sql = "select * from users where id =".$_GET["id"];
	$result = $conn->query($sql);
	if($result->num_rows==0) header("location:users.php");
	$rs = $result->fetch_object();
	?>
		<table class="loginTable">
			<form name="loginForm" method="POST" action="kaydet.php?i=update&id=<?php echo  $rs->id?>">
				<tr>
				 <td>
				 <a href="users.php">Geri Dön</a>
				</td>
				</tr>
				<tr>
					<td colspan="2" > <h3>Düzenleme</h3></td>
				</tr>
				<tr>
					<td>Adınız Soyadınız</td>
					<td>: <input type="text" name="name" value="<?php echo $rs->name?>" /></td>
				</tr>				
				<tr>
					<td>Kullanıcı Adı</td>
					<td>: <input type="text" name="user_name" value="<?php echo $rs->user_name?>" /></td>
				</tr>

				
				<tr>
					<td></td>
					<td> &nbsp; <input class="btn" type="submit" value="Düzenle" /></td>
				</tr>
				
			</form>
		</table>
	</body>
</html>