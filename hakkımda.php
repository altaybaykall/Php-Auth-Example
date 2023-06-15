<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
session_start();
if(!isset($_SESSION["access"]))
	header("location:login.php?hata=2");

	include "connection.php";
	$isim =$_SESSION["kad"];
	$sql = "Select * from users where name='".$isim."' ";
	$result = $conn->query($sql);
?>
<a href="index.php">Menüye Dön</a>
<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Adı Soyadı</th>
			<th>Kullanıcı Adı</th>
			<th>Hesap id</th>
			<th>Yetki</th>
			  <th></th>
		    <th> </th>
		</tr>
	</thead>
	<tbody>
	<?php
		//4.Adım 
		
		if($result->num_rows>0){
			$adet = 0;
			//5.Adım
			while($rs = $result->fetch_object()){				
				$adet+=1;
	?>
				<tr>
					<td><?php echo $adet; ?></td>
					<td><?php echo $rs->name; ?></td>
					<td><?php echo $rs->user_name; ?></td>
					<td><?php echo $rs->id; ?></td>
					<td><?php if($rs->yetki==1) echo "Admin"; else echo "Kullanıcı"; ?></td>
                    <td><a href="update.php?id=<?php echo $rs->id ?>">Düzenle</a> </td>			
					 

					
				</tr>
<?php 
			}
		}
?>		
	</tbody>
</table>