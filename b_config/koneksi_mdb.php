<?php

$mdbpam = $_SERVER['DOCUMENT_ROOT']."/penilaian2/b_config/PERSONALIAKU.db";
//echo $db;
if(!file_exists($mdbpam)){
 $res =  "<div class='alert alert-danger'>
			<a href='#' class='close' data-dismiss='alert'>&times;</a>
			Lokasi DB salah atau DB tidak ada
		</div> Lokasi = ".$mdbpam;
 //die("No DB.");
}else{
 
$conn = new SQLite3($mdbpam);
}
?>