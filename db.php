<?php 

// Membuat koneksi ke database
$db	= new mysqli('localhost', 'root', '', 'kontrakan');
if ($db->connect_error) {

	// Jika error maka tampilkan errornya
	echo $db->error;
}
 ?>