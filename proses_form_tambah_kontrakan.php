<?php  
session_start();
include 'db.php';
if (isset($_POST['proses'])) {
	
	$jenis_kontrakan = $_POST['jenis_kontrakan'];
	$nama_kontrakan = $_POST['nama_kontrakan'];
	$alamat =  $_POST['alamat'];
	$nama_pemilik_kontrakan = $_POST['nama_pemilik_kontrakan'];
	$pengelola = $_POST['pengelola'];
	$no_hp_pemilik_kontrakan = $_POST['no_hp_pemilik_kontrakan'];
	$harga_bulanan = $_POST['harga_bulanan'];
	$harga_tahunan = $_POST['harga_tahunan'];
	$pembayaran_minimal = $_POST['pembayaran_minimal'];
	$keterangan = $_POST['keterangan'];
	//$query = "INSERT INTO data_kontrakan SET jenis_kontrakan = '$jenis_kontrakan', nama_kontrakan = '$nama_kontrakan', alamat = '$alamat', nama_pemilik_kontrakan = '$nama_pemilik_kontrakan', pengelola = '$pengelola', no_hp_pemilik_kontrakan = '$no_hp_pemilik_kontrakan', harga_bulanan = '$harga_bulanan', harga_tahunan = '$harga_tahunan', pembayaran_minimal = '$pembayaran_minimal', keterangan = '$keterangan'";

	$query = "INSERT INTO data_kontrakan (jenis_kontrakan, nama_kontrakan, alamat, nama_pemilik_kontrakan, pengelola, no_hp_pemilik_kontrakan, harga_bulanan, harga_tahunan, pembayaran_minimal, keterangan) VALUES ('$jenis_kontrakan', '$nama_kontrakan', '$alamat', '$nama_pemilik_kontrakan', '$pengelola', '$no_hp_pemilik_kontrakan', '$harga_bulanan', '$harga_tahunan', '$pembayaran_minimal', '$keterangan')";
	if ($db->query($query) === TRUE) {
	    $_SESSION['pesan_berhasil'] = "Penambahan Data berhasil";
	    header('location: tabel_data_tambah_kontrakan.php');
	} else {
	    echo "Error: " . $query . "<br>" . $db->error;
	}

	$db->close();
}
	



?>