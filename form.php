<?php 
session_start();

include 'navbar.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <!-- <title>Kontrak Kita</title> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

      <div class="container">
        <h2>FORM TAMBAH KONTRAKAN</h2>
        <?php 

        if (isset($_SESSION['ada_kolom_kosong'])) {
          echo '
            <div class="alert alert-danger">
            '. $_SESSION['ada_kolom_kosong'] .'
            </div>';
            session_unset($_SESSION['ada_kolom_kosong']);
        }

         ?>
        <form action="proses_form_tambah_kontrakan.php" enctype="multipart/form-data" method="post">
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
            <div class="row">
              <div class="col-md-6">
              <label>Nama Kontrakan <br><input size="100%" class="form-control" type="text" name="nama_kontrakan" ></label>
              </div>
              <!-- <span class="eror" id="err-kota"></span>
              <br> -->
              <div class="col-md-6">
             <label style="width: 100%" >Kota: <br> 
              <select  class="form-control" id="kota" name="kota" required>

                 <?php 

                $kota = $db->query("SELECT * FROM alamat WHERE provinsi = 'lampung'")->fetch_array();
         
                $kota2 = explode(',', $kota['kota_kabupaten']);
                foreach ($kota2 as $val) {
                  echo("<option>". ucwords($val) ."</option>");
                }
                  ?>
              </select>
              </label>
              </div>
            </div>
          </div>

            <div class="form-group">
              <span class="eror" id="err-alamat"></span>
              <br>
              <label >Alamat:  </label>
              <input type="text" id="alamat" class="form-control"   name="alamat">
            </div>

            <div class="form-group">
            	<span class="eror" id="err-nama_pemilik_kontrakan"></span>
              <br>
              <label >Nama Pemilik Kontrakan:  </label>
              <input type="text" id="nama_pemilik_kontrakan" class="form-control"   name="nama_pemilik_kontrakan">
            </div>


            <div class="form-group">
            	<span class="eror" id="err-no_hp_pemilik_kontrakan"></span>
              <br>
              <label >No Hp Pemilik Kontrakan:  </label>
              <input type="text" class="form-control" id="no_hp_pemilik_kontrakan"  name="no_hp_pemilik_kontrakan">
            </div>

            <div class="form-group">
            	<span class="eror" id="err-harga-bulanan"></span>
              <br>  
              <label >Harga Bulanan:  </label>
              <input type="text" class="form-control" id="harga-bulanan" name="harga_bulanan">
            </div>

            <div class="form-group">
            	<span class="eror" id="err-harga-tahunan"></span>
              <br>  
              <label >Harga Tahunan:  </label>
              <input type="text" class="form-control" id="harga-tahunan" name="harga_tahunan">
            </div>

            <div class="form-group">
            	<span class="eror" id="err-minimal"></span>
              <br>  
              <label >Pembayaran Minimal:  </label>
              <input type="number" class="form-control" id="minimal" name="pembayaran_minimal">
            </div>

            <div class="form-group">
              <br>  
              <label >Fasilitas Rumah:  </label> <br>
              <label>Kamar Mandi <br><input class="form-control" type="number" name="kamar_mandi" value=""></label>
              <label>Kamar Tidur<br><input class="form-control" type="number" name="kamar_tidur" value=""></label>
              <label>Ruang Tamu <br> <input class="form-control" type="number" name="ruang_tamu" value=""></label>
              <label>Ruang Keluarga <br> <input class="form-control" type="number" name="ruang_keluarga" value=""></label>
              <label>Jumlah Lantai <br><input class="form-control" type="number" name="jumlah_lantai" value=""></label>
              <label >Sumber Air: <br>  
              <select class="form-control" id="" name="sumber_air">
                <option value="pilih">Pilih jenis sumber air</option>
                <option value="rumah">Sumur</option>
                <option value="toko">Sumur Bor</option>
                <option value="gedung">PDAM</option>
              </select>
              </label>

              <div class="row">
             
              <p>
                <div class="col-md-3">
                  <label><input type="checkbox" name="dapur" value="1">Dapur</label>
                </div>
                <div class="col-md-3">
                  <label><input type="checkbox" name="ruang_makan" value="1">Ruang Makan</label>
                </div>
                <div class="col-md-3">
                  <label><input type="checkbox" name="ruang_kerja" value="1">Ruang Kerja</label>
                </div>
                <div class="col-md-3">
                  <label><input type="checkbox" name="ruang_jemur" value="1">Tempat Jemur</label>
                </div>
                <div class="col-md-3">
                  <label><input type="checkbox" name="garasi" value="1">Garasi</label>
                </div>
                <div class="col-md-3">
                  <label><input type="checkbox" name="kolam_renang" value="1">Kolam Renang</label>
                </div>
                <div class="col-md-3">
                  <label><input type="checkbox" name="taman" value="1">Taman</label>
                </div>
                <div class="col-md-3">
                  <label><input type="checkbox" name="gudang" value="1">Gudang</label>
                </div>
              </p>
            </div>
            </div>

            
            <label >Photo:  
            <input type="file"  class="form-control" id="photo" name="gambar_kontrakan"></label>

            <div class="form-group">
              <label >luas Bangunan:  </label> <br>
              <input type="text" class="form-control" name="luas_bangunan" placeholder="Contoh: (36 m2)">
            </div>

            <div class="form-group">
            	<span class="eror" id="err-keterangan"></span>
              <label >Keterangan:  </label>
              <textarea class="form-control" name="keterangan"></textarea>
            </div> 
            <input class="btn btn-default" type="submit" name="proses" value="Kirimkan">
          </form>
        </div>
      </div>
    </div>
  </div>
  
<script type="text/javascript">
	$(document).ready(function() {
    var jenis_kontrakan = $("#jenis-kontrakan");
    var nama_kontrakan = $("#nama-kontrakan");
    var alamat = $("#alamat");
    var nama_pemilik_kontrakan = $("#nama_pemilik_kontrakan");
    var pengelola = $("#pengelola");
    var no_hp_pemilik_kontrakan = $("#no_hp_pemilik_kontrakan");
    var harga_bulanan = $("#harga-bulanan");
    var harga_tahunan = $("#harga-tahunan");
    var pembayaran_minimal = $("#minimal");
    var err_jenis_kontrakan = $("#err-jenis-kontrakan");
		var err_nama_kontrakan = $("#err-nama-kontrakan");
    var err_alamat = $("#err-alamat");
    var err_nama_pemilik_kontrakan = $("#err-nama_pemilik_kontrakan");
    var err_pengelola = $("#err-pengelola");  
    var err_no_hp_pemilik_kontrakan = $("#err-no_hp_pemilik_kontrakan");
    var err_harga_bulanan = $("#err-harga-bulanan");
    var err_harga_tahunan = $("#err-harga-tahunan");
    var err_minimal = $("#err-minimal");


    jenis_kontrakan.blur(function() {
      if (jenis_kontrakan.val() == "pilih") {
        err_jenis_kontrakan.text("Pilih jenis kontrakan anda!");
        err_jenis_kontrakan.fadeIn();
        jenis_kontrakan.addClass("input-eror");
      }
      else {
        err_jenis_kontrakan.fadeOut();
        jenis_kontrakan.removeClass("input-eror");
      }
    });
    nama_kontrakan.blur(function() {
      if (nama_kontrakan.val().length == 0) {
        err_nama_kontrakan.text("Nama Kontrakan tidak boleh kosong!");
        err_nama_kontrakan.fadeIn();
        nama_kontrakan.addClass("input-eror");
      }
      else if (nama_kontrakan.val().length < 4 || nama_kontrakan.val().length > 100 ) {
        err_nama_kontrakan.text("Nama Kontrakan Harus lebih dari 4 karakter!");
        err_nama_kontrakan.fadeIn();
        nama_kontrakan.addClass("input-eror");
      }
      else {
        err_nama_kontrakan.fadeOut();
        nama_kontrakan.removeClass("input-eror");
      }
    });

    alamat.blur(function() {
      if (alamat.val().length == 0) {
        err_alamat.text("Alamat tidak boleh kosong!");
        err_alamat.fadeIn();
        alamat.addClass("input-eror");
      }
      else if (alamat.val().length < 4 || alamat.val().length > 20 ) {
        err_alamat.text("Alamat Harus Lengkap!");
        err_alamat.fadeIn();
        alamat.addClass("input-eror");
      }
      else {
        err_alamat.fadeOut();
        alamat.removeClass("input-eror");
      }
    });

    nama_pemilik_kontrakan.blur(function() {
      if (nama_pemilik_kontrakan.val().length == 0) {
        err_nama_pemilik_kontrakan.text("harus diisi!");
        err_nama_pemilik_kontrakan.fadeIn();
        nama_pemilik_kontrakan.addClass("input-eror");
      }
      else if(nama_pemilik_kontrakan.val().length < 4 || nama_pemilik_kontrakan.val().length > 20) {
        err_nama_pemilik_kontrakan.text("jumlah karakter minimal 4-20");
        err_nama_pemilik_kontrakann.fadeIn();
        nama_pemilik_kontrakan.addClass("input-eror");
      }
      else {
        err_nama_pemilik_kontrakan.fadeOut();
       nama_pemilik_kontrakan.removeClass("input-eror");
      }
    });

    pengelola.blur(function() {
      if (pengelola.val().length == 0) {
        err_pengelola.text("Harus diisi!");
        err_pengelola.fadeIn();
        pengelola.addClass("input-eror");
      }
      else if(pengelola.val().length < 4 || pengelola.val().length > 20) {
        err_pengelola.text("Jumlah Karakter minimal 4-20");
        err_pengelola.fadeIn();
        pengelola.addClass("input-eror");
      }
      else {
        err_pengelola.fadeOut();
        pengelola.removeClass("input-eror");
      }
    });
    no_hp_pemilik_kontrakan.blur(function() {
      if (no_hp_pemilik_kontrakan.val().length == 0) {
        err_no_hp_pemilik_kontrakan.text("Harus diisi!");
        err_no_hp_pemilik_kontrakan.fadeIn();
        no_hp_pemilik_kontrakan.addClass("input-eror");
      }
      else if(no_hp_pemilik_kontrakan.val().length < 4 || no_hp_pemilik_kontrakan.val().length > 20) {
        err_no_hp_pemilik_kontrakan.text("Jumlah Karakter minimal 4-20");
        err_no_hp_pemilik_kontrakan.fadeIn();
        no_hp_pemilik_kontrakan.addClass("input-eror");
      }
      else {
        err_no_hp_pemilik_kontrakan.fadeOut();
        no_hp_pemilik_kontrakan.removeClass("input-eror");
      }
    });
    harga_bulanan.blur(function() {
      if (harga_bulanan.val().length == 0) {
        err_harga_bulanan.text("Harus diisi!");
        err_harga_bulanan.fadeIn();
        harga_bulanan.addClass("input-eror");
      }
      else if(harga_bulanan.val().length < 4 || harga_bulanan.val().length > 20) {
        err_harga_bulanan.text("Jumlah Karakter minimal 4-20");
        err_harga_bulanan.fadeIn();
        harga_bulanan.addClass("input-eror");
      }
      else {
        err_harga_bulanan.fadeOut();
        harga_bulanan.removeClass("input-eror");
      }
    });
    harga_tahunan.blur(function() {
      if (harga_tahunan.val().length == 0) {
        err_harga_tahunan.text("Harus diisi!");
        err_harga_tahunan.fadeIn();
        harga_tahunan.addClass("input-eror");
      }
      else if(harga_tahunan.val().length < 4 || harga_tahunan.val().length > 20) {
        err_harga_tahunan.text("Jumlah Karakter minimal 4-20");
        err_harga_tahunan.fadeIn();
        harga_tahun.addClass("input-eror");
      }
      else {
        err_harga_tahunan.fadeOut();
        harga_tahunan.removeClass("input-eror");
      }
    });
      pembayaran_minimal.blur(function() {
      if (pembayaran_minimal.val().length == 0) {
        err_minimal.text("Harus diisi!");
        err_minimal.fadeIn();
        pembayaran_minimal.addClass("input-eror");
      }
      else if(pembayaran_minimal.val().length < 4 || minimal.val().length > 20) {
        err_minimal.text("Jumlah Karakter minimal 4-20");
        err_minimal.fadeIn();
        pembayaran_minimal.addClass("input-eror");
      }
      else {
        err_minimal.fadeOut();
        pembayaran_minimal.removeClass("input-eror");
      }
    });
	});

/*function kirim_data_kontrakan() {
  var jenis_kontrakan = $("#jenis-kontrakan");
  var nama_kontrakan = $("#nama-kontrakan");
  var alamat = $("#alamat");
  var nama_pemilik_kontrakan = $("#nama_pemilik_kontrakan");
  var pengelola = $("#pengelola");
  var no_hp_pemilik_kontrakan = $("#no_hp_pemilik_kontrakan");
  var harga_bulanan = $("#harga-bulanan");
  var harga_tahunan = $("#harga-tahunan");
  var pembayaran_minimal = $("#minimal");
  var err_minimal = $("#err-minimal");

  var url_tambah_kontrakan = 'proses_form_tambah_kontrakan.php';
  
  // Menggunakan AJAX untuk mengirim data Pendaftaran
  $.ajax({
    url   : url_tambah_kontrakan,     
    data  : 'proses=ya&nama_kontrakan='+nama_kontrakan.val()+'&alamat='+alamat.val()+'&nama_pemilik_kontrakan='+nama_pemilik_kontrakan.val()+'&no_hp_pemilik_kotrakan='+no_hp_pemilik_kotrakan.val()+'&pengelola='+pengelola.val()+'&harga_bulanan='+harga_bulanan.val()+'&harga_tahunan='+harga_tahunan.val()+'&pembayaran_mimimal='+pembayaran_mimimal.val()+'&keterangan='+keterangan.val(),
    type  : 'POST',
    dataType: 'html',
    success : function(pesan){
      alert(pesan);
    //  err_minimal.text(pesan);
      //err_minimal.fadeIn();
    },
  });
}*/


</script> 
</body>
</html>