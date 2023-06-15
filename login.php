<html>
<?php

session_start();
	if(isset($_COOKIE["kad"])){
		$_SESSION["access"] = "1";
		header("location:index.php");
}

 ?>
 <head>
      <style>
	    body{background:#6E6480}
		.loginform{
			background:#DEDFE5;
			border: 6px solid #b0b0b0;
		    width : 400px;
			margin:100 auto;
			padding: 40px
		}
		.logom{
			
			width:150px;
			margin:1px auto;
			margin-bottom:1px
			padding:40px;
			text-align:center;
		}
		.btn{background:#5cb85c;color:white;border:1px solid #5cb85c;padding:10px;width:140px}
		.btb{background:color:white;border:1px solid #880808;padding:3px;width:120px;margin:5px auto}
	    .alert{color:white;background:#dc3545!important;padding:5px;text_align:center;margin-bottom:10p;}
	  </style>
    </head>
    <body>
       <form action="kontrol.php" method="POST" class="loginForm">
	      <table>
		      <tr>
			   <td colspan="2" style="center">
			     <img div class="logom" src="logo/dojologo.png"
				 </td>
			  </tr>
			  
			  <tr>
			    <td colspan="2">
			  <?php
			  if(isset($_GET["hata"])){
			    if($_GET["hata"]==1){
				
				echo'<tr>
				    <td colspan="2">
				     <p class="alert">
				  Kullanıcı adı veya parola hatalı
				</div>
			  </td>
			</tr>';			
			  }
			   elseif($_GET["hata"]==2){

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
			  
			  
			  <tr>
			    <td>Kullanıcı adı  </td>
				<td>&nbsp; : &nbsp;<input type="text" name="kad" </td>
			  </tr>
		      <tr>
			    <td>Parola  </td>
				<td>&nbsp; : &nbsp;<input type="password" name="parola" </td>
			  </tr>			  
		      <tr>
			    <td colspan="2" style ="text-align:left">Beni Hatırla<input type="checkbox" name="hatirla" value="1"/td>
			  </tr>		
		      <tr>
			   <td colspan="2" > &nbsp;</td>
			  </tr>
			  <tr>
			    <td colspan="2"> 
				    <input class="btn" type="submit" value="Giriş yap" />
				</td>
			  </tr>
		      <tr>
			    <td colspan="2"> 
				     <a href="register.php">Üye Ol</a> 
				</td>
			  </tr>			  
			  
		  </table>
	  </form> 
    </body>
</html>