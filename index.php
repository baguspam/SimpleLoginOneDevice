<?php
session_start();
if(!empty($_SESSION['username']) OR !empty($_SESSION['id_user']) OR !empty($_SESSION['level']) OR !empty($_SESSION['password'])){	
		header('location:dashboard/index.php');
	}
else{
		include "login.php";
	}
	
	

?>