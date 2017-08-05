<?php  
session_start();
require_once 'db.php';
require_once "class.php";
$user_data = $db->query("SELECT * FROM user WHERE email = '". user::email() ."'")->fetch_array(); 
if (isset($_POST['proses'])) {

/*	if (empty($_POST['jenis_kontrakan']) || empty($_POST['nama_kontrakan']) || empty($_POST['kota']) || empty($_POST['alamat']) || empty($_POST['nama_pemilik_kontrakan']) || empty($_POST['no_hp_pemilik_kontrakan']) || empty($_POST['harga_bulanan']) || empty($_POST['harga_tahunan']) || empty($_POST['pembayaran_minimal'])) {

		$_SESSION['ada_kolom_kosong'] = "Kolom tidak boleh ada yang kosong!";
		header('location: form.php');
	}
	else {
*/
		$jenis_kontrakan 			=	$_POST['jenis_kontrakan'];
		$nama_kontrakan 			= 	$_POST['nama_kontrakan'];
		$kota 						=	$_POST['kota'];
		$alamat 					= 	$_POST['alamat'];
		$nama_pemilik_kontrakan 	= 	$_POST['nama_pemilik_kontrakan'];
		$no_hp_pemilik_kontrakan	= 	$_POST['no_hp_pemilik_kontrakan'];
		$harga_bulanan 				=	$_POST['harga_bulanan'];
		$harga_tahunan 				= 	$_POST['harga_tahunan'];
		$pembayaran_minimal			= 	$_POST['pembayaran_minimal'];
		$gambar_kontrakan			=	$_FILES['gambar_kontrakan']['name'];
		$luas_bangunan				=	$_POST['luas_bangunan'];
		$kamar_mandi				=	$_POST['kamar_mandi'];
		$kamar_tidur				=	$_POST['kamar_tidur'];
		$ruang_tamu					=	$_POST['ruang_tamu'];
		$ruang_keluarga				=	$_POST['ruang_keluarga'];
		$jumlah_lantai 				=	$_POST['jumlah_lantai']; 
		$sumber_air					=	$_POST['sumber_air'];
		$dapur						=	(empty($_POST['dapur']) ? 0 : $_POST['dapur']);
		$garasi						=	(empty($_POST['garasi']) ? 0 : $_POST['garasi']);
		$ruang_makan 				=	(empty($_POST['ruang_makan']) ? 0 : $_POST['ruang_makan']);
		$kolam_renang				=	(empty($_POST['kolam_renang']) ? 0 : $_POST['kolam_renang']);
		$ruang_kerja				=	(empty($_POST['ruang_kerja']) ? 0 : $_POST['ruang_kerja']);
		$taman						=	(empty($_POST['taman']) ? 0 : $_POST['taman']);
		$tempat_jemur				=	(empty($_POST['tempat_jemur']) ? 0 : $_POST['tempat_jemur']);
		$gudang						=	(empty($_POST['gudang']) ? 0 : $_POST['gudang']);
		$keterangan 				= 	$_POST['keterangan'];		

		//$query = "INSERT INTO data_kontrakan SET jenis_kontrakan = '$jenis_kontrakan', nama_kontrakan = '$nama_kontrakan', alamat = '$alamat', nama_pemilik_kontrakan = '$nama_pemilik_kontrakan', pengelola = '$pengelola', no_hp_pemilik_kontrakan = '$no_hp_pemilik_kontrakan', harga_bulanan = '$harga_bulanan', harga_tahunan = '$harga_tahunan', pembayaran_minimal = '$pembayaran_minimal', keterangan = '$keterangan'";

		move_uploaded_file($_FILES['foto']['tmp_name'], "gambar/".$_FILES['foto']['name']);

		$query = "INSERT INTO data_kontrakan (user_id, jenis_kontrakan, nama_kontrakan, kota, alamat, nama_pemilik_kontrakan, no_hp_pemilik_kontrakan, harga_bulanan, harga_tahunan, pembayaran_minimal, gambar_kontrakan, kamar_mandi, kamar_tidur, ruang_tamu, ruang_keluarga, jumlah_lantai, sumber_air, dapur, garasi, ruang_makan, kolam_renang, ruang_kerja, taman, tempat_jemur, gudang, keterangan) VALUES ('". $user_data['id'] . "', '$jenis_kontrakan', '$nama_kontrakan', '$kota', '$alamat', '$nama_pemilik_kontrakan', '$no_hp_pemilik_kontrakan', '$harga_bulanan', '$harga_tahunan', '$pembayaran_minimal', '$gambar_kontrakan', '$kamar_mandi', '$kamar_tidur', '$ruang_tamu', '$ruang_keluarga', '$jumlah_lantai', '$sumber_air', '$dapur', '$garasi', '$ruang_makan', '$kolam_renang', '$ruang_kerja', '$taman', '$tempat_jemur', '$gudang', '$keterangan')";
		if ($db->query($query) === TRUE) {
		    $_SESSION['pesan_berhasil_menambah'] = "Penambahan Data berhasil";
		    header('location: tabel_data_tambah_kontrakan.php');
		} 
		else {
		    echo "Error: " . $query . "<br>" . $db->error;
		}

		$db->close();
	
//	}
}
?>