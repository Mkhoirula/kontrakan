<?php 
session_start();
require_once "navbar.php";
$id_data = (isset($_GET['id']) ? $_GET['id'] : '');
$data_kontrakan = $db->query("SELECT * FROM data_kontrakan WHERE id = '$id_data'")->fetch_array();
/*if (!$db->query("SELECT * FROM user WHERE email = '". user::email() ."'")) {
  echo $db->error;
$user_data = $db->query("SELECT * FROM user WHERE email = '". user::email() ."'")->fetch_array(); 
if (!isset($id_data) || $id_data == '') {
  $_SESSION['id_kosong'] = 'Anda harus memilih kontrakan dulu!';
  header('location: tabel_data_tambah_kontrakan.php');
  exit();
}
else {


  if (isset($_POST['proses'] )) {
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
    if (empty($jenis_kontrakan)) $err .= "Pilih jenis kontrakan!";
    if (empty($nama_kontrakan)) $err .= "Masukkan nama kontrakan!";
    if (empty($alamat)) $err .= "Masukkan alamatnya!";
    if (empty($nama_pemilik_kontrakan)) $err .= "Isi nama pemilik kontrakannya!";
    if (empty($pengelola)) $err .= "Masukkan nama pengelola!";
    if (empty($no_hp_pemilik_kontrakan)) $err .= "Masukkan no HP nya!";
    if (empty($harga_bulanan)) $err .= "Masukkan harga Bulanan";
    if (empty($harga_tahunan)) $err .= "Masukkan harga tahunan";
    if (empty($pembayaran_minimal)) $err .= "Tentukan pembayaran minimalnya!";
    if ($err === false) {
      if ($db->query("UPDATE data_kontrakan SET jenis_kontrakan = '$jenis_kontrakan', nama_kontrakan = '$nama_kontrakan', alamat = '$alamat', nama_pemilik_kontrakan = '$nama_pemilik_kontrakan', pengelola = '$pengelola', no_hp_pemilik_kontrakan = '$no_hp_pemilik_kontrakan', harga_bulanan = '$harga_bulanan', harga_tahunan = '$harga_tahunan', pembayaran_minimal = '$pembayaran_minimal', keterangan = '$keterangan' WHERE id = '$id_data'") == true) {
        $h = true;
      }
      else {
        echo "Kesalahan!!!<br>";
        echo $db->error;
      }
    }
  }
}*/
 ?>
 <div class="container">

	<h1>Edit Kontrakan Saya</h1>
  <?php 
/*  if (isset($err) && $err !== false) {
    echo'
      <div class="alert alert-danger">'.
        $err.'
      </div>';
  }
  if (isset($h) && $h == true) {
    $_SESSION['pesan_berhasil_mengedit'] = '<strong>Sukses!</strong> Mengedit data kontrakan.';
    // header('location: tabel_data_tambah_kontrakan.php');
  }

*/
  ?>
  	<form action="proses_form_edit_kontrakan.php" method="post">

    
    <div class="form-group">
    	<span class="eror" id="err-jenis-kontrakan"></span>
    	<br>
      <label >Jenis Kontrakan:  </label>
      <select class="form-control" id="jenis-kontrakan" name="jenis_kontrakan">
        <option value="pilih">Pilih jenis kontrakan..</option>
        <option value="rumah">rumah</option>
        <option value="toko">toko</option>
        <option value="gedung">gedung</option>
        <option value="apartement">apartement</option>
      </select>
    </div>
    <div class="form-group">
      <span class="eror" id="err-nama-kontrakan"></span>
      <br>
      <label >Nama Kontrakan:  </label>
      <input value="<?=$data_kontrakan['nama_kontrakan'];?>" type="text" class="form-control" id="nama-kontrakan" name="nama_kontrakan">
    </div>

    <div class="form-group">
    	<span class="eror" id="err-alamat"></span>
      <br>
      <label >Alamat:  </label>
      <input value="<?=$data_kontrakan['alamat'];?>" type="text" id="alamat" class="form-control"   name="alamat">
    </div>

    <div class="form-group">
    	<span class="eror" id="err-nama_pemilik_kontrakan"></span>
      <br>
      <label >Nama Pemilik Kontrakan:  </label>
      <input value="<?=$data_kontrakan['nama_pemilik_kontrakan'];?>" type="text" id="nama_pemilik_kontrakan" class="form-control"   name="nama_pemilik_kontrakan">
    </div>

    <div class="form-group">
    	<span class="eror" id="err-pengelola"></span>
      <br>
      <label >Pengelola:  </label>
      <input value="<?=$data_kontrakan['pengelola'];?>" type="text" class="form-control" id="pengelola" name="pengelola">
    </div>

    <div class="form-group">
    	<span class="eror" id="err-no_hp_pemilik_kontrakan"></span>
      <br>
      <label >No Hp Pemilik Kontrakan:  </label>
      <input value="<?=$data_kontrakan['no_hp_pemilik_kontrakan'];?>" type="text" class="form-control" id="no_hp_pemilik_kontrakan"  name="no_hp_pemilik_kontrakan">
    </div>

    <div class="form-group">
    	<span class="eror" id="err-harga-bulanan"></span>
      <br>  
      <label >Harga Bulanan:  </label>
      <input value="<?=$data_kontrakan['harga_bulanan'];?>" type="text" class="form-control" id="harga-bulanan" name="harga_bulanan">
    </div>

    <div class="form-group">
    	<span class="eror" id="err-harga-tahunan"></span>
      <br>  
      <label >Harga Tahunan:  </label>
      <input value="<?=$data_kontrakan['harga_tahunan'];?>" type="text" class="form-control" id="harga-tahunan" name="harga_tahunan">
    </div>

    <div class="form-group">
    	<span class="eror" id="err-minimal"></span>
      <br>  
      <label >Pembayaran Minimal:  </label>
      <input value="<?=$data_kontrakan['pembayaran_minimal'];?>" type="number" class="form-control" id="minimal" name="pembayaran_minimal">
    </div>

    <div class="form-group">
    	<span class="eror" id="err-keterangan"></span>
      <label >Keterangan:  </label>
      <textarea class="form-control" name="keterangan"><?=(!empty($data_kontrakan['keterangan']) ? $data_kontrakan['keterangan'] : null);?></textarea>
    </div>
    <input type="hidden" name="id_kontrakan" value="<?=(isset($_GET['id']) ? $_GET['id'] : null);?>">
    <input class="btn btn-default" type="submit" name="proses" value="Kirimkan">
  </form>

