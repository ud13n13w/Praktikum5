<?php

include "inc.php";

	echo $angka;
	echo "<br>";

	if($angka == 100){
		echo "Memuaskan";
	}else if($angka <= 99 && $angka >= 85){
		echo "Sangat Baik";
	}else if($angka <= 84 && $angka >= 70){
		echo "Baik";
	}else if($angka <= 69 && $angka >= 55 ){
		echo "Cukup";
	}else if($angka <= 54 && $angka >= 0){
		echo "Kurang";
	}

?>