<?php
if (isset($_POST['login'])){

$user=antisql($_POST['username']);
$pass = antisql($_POST['password']);

if (empty($user) OR empty($pass)) {
			echo "<div class='alert alert-danger'>Maaf, Username dan Password tidak boleh ada yang kosong</div>";
		
		} else {

	$login=mysql_query("select * from tb_admin where username='$user' and pass='$pass' ");
	$count=mysql_num_rows($login);
	$rsi=mysql_fetch_array($login);
	
	if ($count > 0){
		session_start();
				$_SESSION['nim']=$rsi['nim'];
				$_SESSION['nama']=$nama['nama'];
				$_SESSION['pass']=$rsi['pass'];
				$_SESSION['level']=$rsi['level'];	
		header('location:./admin/home');
	}else{ 
	echo "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert'>&times;</a>Maaf, Username dan Password tidak cocok</div>";
	
	}
}
}	
		
?>
