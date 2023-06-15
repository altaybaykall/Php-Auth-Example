<html>
<?php
session_start();
include "../session_control.php";
?>

<head>
	<title>Yazılar</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>

	<a href="add.php" class="btn btn-success">Yeni Yazı Ekle</a>
	<?php

	include "../connection.php";

    $sql = "select *,title as cat_title from posts ";
			

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {


	?>
		<table class="table table-striped mt-20">
			<thead>
				<tr>
					<th>#</th>
					<th>Başlık</th>
					<th>Kategori</th>
					<th>İşlemler</th>
				</tr>
				<?php
				//5.Adım
				$adet = 0;
				while ($rs = $result->fetch_object()) {
					$adet += 1;
				?>
					<tr>
						<td><?php echo $adet ?></td>
						<td><?php echo $rs->title ?></td>
						<td><?php echo $rs->cat_title ?></td>
						<td><a href="update.php?id=<?php echo $rs->id ?>">Düzenle</a> | <a href="sil.php?id=<?php echo $rs->id ?>">Sil</a></td>
					</tr>
				<?php
				}
				?>
			</thead>
		</table>
	<?php


	} else {
		echo "Kayıt yok.";
	}
	?>

</body>

</html>