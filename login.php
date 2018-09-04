<?php
include "b_config/koneksi_mdb.php";
include "b_config/b_konek.php";


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $nama_aplikasi;?>">
    <meta name="author" content="Pampam">
    <link rel="icon" href="asset/image/<?php echo $logo_aplikasi;?>">
	

    <title><?php echo $nama_aplikasi;?></title>
	<style>
	.forgot a{
    text-decoration:none;
	color:#fff;  
	}
	.forgot a:hover{
	text-decoration:none;
    color:blue;  
	}
	</style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="asset/css/signin.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">
	<?php include "ceklogin.php"?>

	<!-- role="form" -->
      <form class="form-signin" method="post">
        <h2 class="form-signin-heading"><center><img src="asset/image/no-image.jpg" width="50px" height="50px"> Halaman Login</center></h2>
        <h5 class="baru"><?php echo $nama_aplikasi;?></h5>
        <input name="username" id="user" type="input" class="form-control" placeholder="Username" required autofocus>
        <input name="password" id="pass" type="password" class="form-control" placeholder="Password" required>

        <button class="btn btn-lg btn-danger btn-block" type="submit" name="login">Sign in</button>
      </form>
	  	<?php include "contact.php";?> 

	    <center><h5 class="form-signin">Copyright &copy; <a href="#contact" data-toggle="modal" class="baru" data-target="#contact"> Pampam</a></h5></center>     
    </div> 
	<!-- /container -->
    

  
  </body>
</html>
