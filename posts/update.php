<html>
<?php
session_start();
include "../session_control.php";
include "../connection.php";
$sql = "select * from posts where id=".$_GET["id"];
$result = $conn->query($sql);
 ?> 
	<head>
		<title>Yazı Ekle</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	 </head>
	 <body>	
	 <?php
	 if($result->num_rows>0){
		 $rsPost = $result->fetch_object();

	 ?>
	<form action="kaydet.php?i=update&id=<?php echo $rsPost->id?>" method="post">
		<div class="row" style="width:400px;margin: 20px auto">
			<div class="col-4">
				Başlık : 
			</div>
			<div class="col-8">
				<input value="<?php echo $rsPost->title?>" type="text" required name="title" class="form-control" />			
			</div>
			<div class="col-12" style="padding-bottom:20px">
				<label>Açıklama :</label><br>
				<textarea class="form-control" required name="description" row="7"><?php echo $rsPost->description?></textarea>    
			</div>
			<div class="col-4">
				Kategori : 
			</div>
			<div class="col-8">			
				<select name="category_id" required class="form-control">
					<option value="">Şeçiminiz</option>
					<?php
					$sql = "select * from categories order by title";
					$result = $conn->query($sql);
					if($result->num_rows>0){
						while($rs = $result->fetch_object()){
							if($rsPost->category_id==$rs->id)
								$selected = "selected";
							else 
								$selected = "";
							echo '<option '.$selected.' value="'.$rs->id.'">'.$rs->title.'</option>';

							
						}
					}
					
					?>
					
				</select>
			</div>
			<div class="col-12" style="text-align:right;padding-top:20px">
				<input type="submit" value="Kaydet" class="btn btn-danger" />
			</div>
			
		</div>
	</form>
	<?php
	 }else {
		 header("location:index.php");
	 }
	?>
	</body>
 </html>