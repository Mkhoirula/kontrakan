<?php
include 'db.php'; 
$id_data_kontrakan = $_GET['id'];
if ($db->query("DELETE FROM data_kontrakan WHERE id = '$id_data_kontrakan'") == true) {
	header('location: tabel_data_tambah_kontrakan.php');
}
else echo 'Kesalahan!!';
 ?>