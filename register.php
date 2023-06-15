
<html>
	<head>
		<style>
				body{
					background:#6E6480;
				}
				.loginTable{
					background:#fff;
					border:1px solid #d0d0d0;
					width:400px;
					margin:200px auto;			
		       
					padding: 20px;
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
				.hesap{background:#grey; color:black;border:2px  #D8482A;width:5px ;margin:7 auto;padding:3px;
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
	?>
		<table class="loginTable">
			<form name="loginForm" method="POST" action="kaydet.php?i=insert">
				<tr>
					<td colspan="2"><h3>Kayit Ol</h3></td>
				</tr>
				<tr>
					<td>Adınız Soyadınız</td>
					<td>: <input type="text" name="name" /></td>
				</tr>				
				<tr>
					<td>Kullanıcı Adı</td>
					<td>: <input type="text" name="user_name" /></td>
				</tr>
				<tr>
					<td>Parola</td>
					<td>: <input type="password" name="password" /></td>
				</tr>
				
				<tr>
					<td></td>
					<td> &nbsp; <input class="btn" type="submit" value="Kayıt Ol" /></td>
				</tr>
				<tr>
				<td>
				<a href="cik.php" class="geri">Geri dön </a>
				</td>
				</tr>
			</form>
		</table>
	</body>
</html>