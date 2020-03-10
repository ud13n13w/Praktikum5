<?php
	
	// CODE NOT WORK

	/*if(isset($variable_cookies)){
		echo 'Variable Cookiesnya "$variable_cookies" Nilainya adalah ' . $variable_cookies;
	}else{
		echo "Variable Cookies Belum Diterapkan";
	}*/

	// WORK CODE

	//echo $_COOKIE['variable_cookies'] . "</br>";

	if(isset($_COOKIE['variable_cookies'])){
		echo 'Variable Cookiesnya "$variable_cookies" Nilainya adalah ' . $_COOKIE['variable_cookies'];
	}else{
		echo "Variable Cookies Belum Diterapkan";
	}

?>