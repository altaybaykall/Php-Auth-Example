<html>

<?php
session_start();

if (!isset($_SESSION["access"])) {
	header("location:login.php?hata=2");
}

if (($_SESSION["yetki"]) >= 0) {
	echo "Merhaba " . $_SESSION["kad"] . "</br>";
} else {
	header("location:login.php?hata=2");
}
echo "Yetki seviyeniz = " . $_SESSION["yetki"];
if (isset($_COOKIE["kad"]))
	echo "<br>Cookie Değeri : " . $_COOKIE["kad"];


?>




<head>
	<style>
		body {
			background: #6E6480
		}

		.logom {
			width: 150px;
			margin: 1px auto;
			margin-bottom: 1px;
			padding: 40px;
		}


		.kutum {
			background: #DEDFE5;
			border: 2px solid #b0b0b0;
			width: 1000px;
			margin: 100 auto;
			padding: 30px
		}

		//.formula1{background:#5cb85c;color:white;border:2px solid #b0b0b0;width:130px;margin:5 ;padding:2px;}
		//.kull{background:#E28673;color:white;border:3px solid #b0b0b0;width:130px;margin:10 bottom;padding:4px;}
		//.formula2{background:#E28673;color:white;border:2px solid #b0b0b0;width:130px;margin:5 ;padding:2px;}
		.hesap {
			background: #grey;
			color: black;
			border: 2px #D8482A;
			width: 5px;
			margin: 7 auto;
			padding: 3px;
		}

		.alert {
			color: white;
			background: #dc3545 !important;
			padding: 5px;
			width: 300px;
			margin: 8;
			text-align: center;
		}
	</style>
</head>

<body>

	<form class="kutum">
		<table>

			<tr>
				<td colspan="2" >
					<img div class="logom" src="logo/dojologo.png" </td>
			</tr>
			<tr>


				<td>Yönetici sayfasına :
				<td><a href="adminpage.php" class="formula1">Git </a></td>
			</tr>
			<tr></br></tr>
			<tr>
				<td> Kullanıcılar : </td>
				<td><a href="users.php" class="kull">Git</a>
				</td>
			</tr>
			<a href="posts/index.php" class="btn btn-success">Yazılar</a>
			<tr>
				<td>
					Hesap ayarlarım :
				<td><a href="hakkımda.php" class="formula2">Git</a>
			</tr>
			</td>
			<tr>
				<td>
					<?php
					if (isset($_GET["hata"])) {
						if ($_GET["hata"] == 1) {

							echo '<tr>
							<td colspan="2">
								<div class="alert">
									Yetkisiz giriş denemesi
								</div>
							</td>
						</tr>';
						}
					}
					?>
		</table>
		<form class="hesap">
			<table>
				<tr>
					<td>
						<a href="cik.php" class="hesap">Hesaptan Çık </a>
					</td>
				</tr>
			</table>
</body>

</html>