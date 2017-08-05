<?php 
session_start();
include 'db.php';
if (isset($_POST['id_kontrakan'])) {
	if (isset($_POST['proses'])) {
		$id_data = $_POST['id_kontrakan'];
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
	    $err = false;
		if ($err === false) {
	    	if ($db->query("UPDATE data_kontrakan SET jenis_kontrakan = '$jenis_kontrakan', nama_kontrakan = '$nama_kontrakan', alamat = '$alamat', nama_pemilik_kontrakan = '$nama_pemilik_kontrakan', pengelola = '$pengelola', no_hp_pemilik_kontrakan = '$no_hp_pemilik_kontrakan', harga_bulanan = '$harga_bulanan', harga_tahunan = '$harga_tahunan', pembayaran_minimal = '$pembayaran_minimal', keterangan = '$keterangan' WHERE id = '$id_data'") == true) {
	    		$_SESSION['berhasil_edit'] = "Data berhasil diedit!";
	    		header("location: tabel_data_tambah_kontrakan.php");
	    	}
	    	else {
	       		echo "Kesalahan!!!<br>";
	        	echo $db->error;
	      	}
	    }
	}
}
else {
	$_SESSION['id_kosong'] = 'Anda harus memilih kontrakan dulu!';
 	header('location: tabel_data_tambah_kontrakan.php');
 	exit();
}
 ?>
