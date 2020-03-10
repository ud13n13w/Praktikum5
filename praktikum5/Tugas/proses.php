<?php

//VALIDATION

if( empty($_POST['nama'])  || empty($_POST['tempat_lahir']) || empty($_POST['tanggal_lahir']) || empty($_POST['alamat']) || 
	empty($_POST['email']) || empty($_POST['jam']) ){
	
	header('Location:datasalah.php');

}else{

	$nama 			= $_POST['nama'];
	$tempat_lahir 	= $_POST['tempat_lahir'];
	$tanggal_lahir	= $_POST['tanggal_lahir'];
	$alamat			= $_POST['alamat'];
	$email 			= $_POST['email'];
	$jam 			= $_POST['jam'];
	$saatini = date("l, d F Y G:i:s ");

	//echo $nama . " " . $tempat_lahir . "  " . $tanggal_lahir . "  " . $alamat ;

	include('biodata.php');
}



?>