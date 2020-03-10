<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>

	<?php

	echo "<table class=tabel>";
		echo "<tr>";
			echo "<td class=tbl_hd>Nama</td>";
			echo "<td>". $nama ."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td class=tbl_hd>Tempat Lahir</td>";
			echo "<td>". $tempat_lahir ."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td class=tbl_hd>Tanggal Lahir</td>";
			echo "<td>". $tanggal_lahir ."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td class=tbl_hd>Alamat</td>";
			echo "<td>". $alamat ."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td class=tbl_hd>Email</td>";
			echo "<td>". $email ."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td class=tbl_hd>Jam</td>";
			echo "<td>". $jam ."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td class=tbl_hd>Waktu Login :</td>";
			echo "<td>". $saatini ."</td>";
		echo "</tr>";
	echo "</table>";

?>

</body>
</html>

