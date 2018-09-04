<?php
if (isset($_POST['login'])){
$pass2=$_POST['password'];
$user=$_POST['username'];
$pass=md5($pass2.'bagusganteng32');

if (empty($user) OR empty($pass)) {
			echo "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert'>&times;</a>Maaf, Username dan Password tidak boleh ada yang kosong</div>";
		
		} else {
			
	$rs = $conn->query("SELECT Count(*) AS counter FROM b_user where b_id_user='".$user."' and b_pass='".$pass."'");
    $arr = $rs->fetchArray();
	
	$sql=$conn->query("select * from b_user where b_id_user='$user' and b_pass='$pass'");	
	$cekdata=$sql->fetchArray();

	$count=$arr['counter'];
	if($count>0){
			session_start();
				$_SESSION['id_user']=$cekdata["b_id_user"];
				$_SESSION['username']=$cekdata["b_nama"];
				$_SESSION['password']=$cekdata["b_pass"];
				$_SESSION['level']=$cekdata["b_level"];
				$_SESSION['bagian']=$cekdata["b_bagian"];
				
			header('location:dashboard/index.php');
	}else{ 
	echo "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert'>&times;</a>Maaf, Username dan Password tidak cocok</div>";
	
	}
	
}
}	
		
?>
