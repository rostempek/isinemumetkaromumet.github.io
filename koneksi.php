<?php
	$serverName = "localhost";
	$username = "root";
	$password = "";
	$db_name = "kritik/pesankostumer";

	$connection = mysqli_connect($serverName, $username, $password, $db_name);

	if(!$connection) {
		die("Koneksi gagal : ".mysqli_connect_erorr());
	}
?>
