<!DOCTYPE html>
<html>
<head>
	<title>Praktikum 1 : Array </title>
</head>
<body>

<?php

	$nama[] = "Muhammad";
	$nama[] = "Burhanuddin";
	$nama[] = "Fawwaz";

	echo $nama[1] . $nama[2] . $nama[0];
	echo "<br>";

	//menghitung jumlah elemen array
	$jum_array = count($nama); 
	echo "Jumlah Elemen Array adalah : " . $jum_array;

?>	

</body>
</html>

