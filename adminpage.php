<?php
session_start();

if (!isset($_SESSION["access"])) {
	header("location:login.php?hata=2");
}
if (($_SESSION["yetki"]) > 0) {
	echo "Merhaba " . $_SESSION["kad"] . "</br>";
} else {
	header("location:index.php?hata=1");
}
echo "Yetki seviyeniz = " . $_SESSION["yetki"];
if (isset($_COOKIE["kad"]))
	echo "<br>Cookie Değeri : " . $_COOKIE["kad"];





?>

<html>
<style>
	body {
		background: #6E6480
	}

	

	.logom {
		width: 150px;
		margin: 1px left;
		margin-bottom: 1px;
		padding: 40px;
	}

	


	.kutum {
		background: #DEDFE5;
		border: 5px solid grey;
		width: 1200px;
		margin: 100 auto;
		padding: 20px
	}
</style>

<body>
	<form class="kutum">
		<table>

			<tr>
				<td colspan="2" >
					<img div class="logom" src="logo/dojo.png"> </td>

			</tr>
			<tr>
				<td>
					Admin Settings
				</td>
			</tr>
			<tr>
				<td colspan="2"> xxx<input type="checkbox" name="setsss" value="1"> /td>
			</tr>
			<tr>
				<td colspan="2"> yyy <input type="checkbox" name="updaterr" value="1" DS></td>
			</tr>
</body>






</html>