<?php 
include "class.php";
include "db.php";

// mengambil data dari tabel user dari database kontrakan
$user_data = $db->query("SELECT * FROM user WHERE email = '". user::email() ."'")->fetch_array();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
    .err-input {
      border: 1px solid red;
      box-shadow: 1px 1px 7px red;
    }
    .submit_disabled {
      cursor: not-allowed;
    }
    .form-group input {
      font-style: italic;
    }
    .form-group input, span {
      font-weight: bold;
    }



  #modal{
    background: pink;
  }
  
  #nav{
    height: 55px;
    background: linear-gradient( orange, white, orange); /* Standard syntax (must be last) */
    border: none;
}

  #sepko {
    height: 55px;
background: linear-gradient(to right,  #e0e1e2, #e0e1e2, #e0e1e2);
}

#body{
  background-image: url(foto/kayu.jpg); 
}
#filter {
  margin: 0px 0px 0px 0px;
  padding: 15px;
  background: #e0e1e2;
  width: ;
}
</style>
</head>
<body  >


<nav class="navbar navbar-inverse" id="nav">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand-left" ><font size="6">
      <img src="foto/rumah.jpg" width="60px" height="35px"> <b> <font face="calibbri"> Kontrak Kita.com </font> </b> </font></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
    <?php 

    // Mengecek apakah user telah login atau belum. jika sudah maka tampilkan nama user dan link log out
    if (user::logged()) {
      echo '
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> '. $user_data['nama'] .'</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Keluar</a></li>';
    }
    // Jika belum maka tampilkan link untuk Mendaftar dan Masuk
    else {
      echo '
        <li><a data-toggle="modal" data-target="#formPendaftaran" data-backdrop="static" href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a data-toggle="modal" data-target="#formLogin" data-backdrop="static" href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';     
    }

     ?>
    </ul>
  </div>
</nav>

<!-- Modal untuk form Pendaftaran -->
<div class="modal fade" id="formPendaftaran" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 align="center">Pendaftaran</h2>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <span style="color: red;" id="err-nama"></span>
          <br>
          <label>Nama:</label>
          <input placeholder="Masukkan Nama" class="form-control" id="nama" type="text" name="nama">
          <br>
          <span style="color: red;" id="err-email"></span>
          <br>
          <label>Email:</label>
          <input placeholder="Masukkan Email" class="form-control" id="email" type="text" name="email">
          <br>
          <span style="color: red;" id="err-pass"></span>
          <br>
          <label>Kata sandi:</label>
          <input placeholder="Masukkan Kata sandi" class="form-control" id="pass" type="password" name="pass">
          <br>
          <span style="color: red;" id="err-re-pass"></span>
          <br>
          <label>Ulangi kata sandi:</label>
          <input placeholder="Ulangi Kata sandi" class="form-control" id="re-pass" type="password" name="re-pass">
          <br>
          <input onclick="cek_mendaftar()" id="tombol-daftar" class="btn btn-default" type="submit" value="Daftar">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<!-- Modal untuk form Login -->
<div class="modal fade" id="formLogin" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 align="center">Login</h2>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <span style="color: red;" id="err-email-login"></span>
          <br>
          <label>Email:</label>
          <input id="email_login" class="form-control" type="text" name="email" placeholder="Masukkan Email">
          <label>Kata sandi:</label>
          <input id="pass_login" class="form-control" type="password" name="pass" placeholder="Masukkan Password">
          <br>
          <input id="btn_login" onclick="cek_login()" class="btn btn-default" type="submit" value="Masuk">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<center>
<img src="foto/kontrak.png" style="width: 30%; height: 220px">
</center>
<br>

<!-- Filter pencarian -->
<div id="filter">
<center>
  <form class="form-inline" method="get">
    <div class="form-group">
      <select class="form-control">
        <option>Tipe kontrakan</option>
        <option> Rumah </option>
        <option>Toko </option>
        <option> Gedung </option>
        <option> Apartemen </option>
      </select>      
    </div>
    <div class="form-group" >
      <select class="form-control"  >
        <option>Harga</option>
        <option>Rp 5000000</option>
        <option>Rp 5000000</option>
        <option>Rp 5000000</option>
        <option>Rp 5000000</option>
        <option>Rp 5000000</option>
        <option>Rp 5000000</option>
        <option>Rp 5000000</option>
        <option>Rp 5000000</option>
        <option>Rp 5000000</option>
        <option>Rp 5000000</option>
        <option>Rp 5000000</option>
        <option>Rp 5000000</option>
        <option>Rp 5000000</option>
        <option>Rp 5000000</option>
        <option>Rp 5000000</option>
        <option>Rp 5000000</option>
        <option>Rp 5000000</option>
        <option>Rp 5000000</option>
        <option>Rp 5000000</option>
        <option>Rp 5000000</option>
        <option>Rp 5000000</option>
        <option>Rp 5000000</option>
        <option>Rp 5000000</option>
        <option>Rp 5000000</option>
        <option>Rp 5000000</option>
        <option>Rp 5000000</option>
        <option>Rp 5000000</option>
        <option>Rp 10000000</option>
        <option>Rp 15000000</option>
        <option>Rp 20000000</option>
      </select>      
    </div>
    <div class="form-group">
      <input list="data" class="form-control" type="text" name="alamat" placeholder="Masukkan Nama Daerah, Kota, alamat " size="34">
      <datalist id="data">
        <option label="Aceh" value="Aceh" placheoder="aceh"></option>
        <option label="Lampung" value="Lampung" placheoder="Lampung"></option>
        <option label="Jakarta" value="Jakarta" placheoder="Jakarta"></option>
        <option label="Bandung" value="Bandung" placheoder="Bandung"></option>
        <option label="Tanggrang" value="Tanggrang" placheoder="Tanggrang"></option>
      </datalist>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-warning"> CARI</button>   
    </div>

  </form>
  </center>
</div>
<br><br>
    <center>
     <h1><b>REKOMENDASI KONTRAKAN TERDEKAT</b></h1>
    </center>



  <script type="text/javascript">
    $(document).ready(function() {
      var nama = $("#nama");
      var email = $("#email");
      var email_login = $("#email_login");
      var pass = $("#pass");
      var pass_login = $("#pass_login");
      var re_pass = $("#re-pass ");
      var error = $("#error");
      var err = false;
      var regex = /^([A-Za-z][A-Za-z0-9\-\.\_]*)\@([A-Za-z][A-Za-z0-9\-\_]*)(\.[A-Za-z][A-Za-z0-9\-\_]*)+$/;
      var err_nama = $("#err-nama").hide();
      var err_email = $("#err-email").hide();
      var err_email = $("#err-email-login").hide();
      var err_pass = $("#err-pass").hide();
      var err_re_pass = $("#err-re-pass").hide();

    //validasi pendaftaran
      nama.blur(function() {
        if (nama.val().length == 0) {
          $("#err-nama").text("Masukkan nama!");
          $("#err-nama").fadeIn();    
          nama.addClass("err-input");
        }
        else if (nama.val().length < 4 || nama.val().length > 15) {
          $("#err-nama").text("Nama harus berjumlah 4-15 karakter!");
          $("#err-nama").fadeIn();
          nama.addClass("err-input");
        }
        else {
          $("#err-nama").fadeOut();
          nama.removeClass("err-input");
        }
      });
      email.blur(function() {
        if (email.val().length == 0) {
          $("#err-email").text("Masukkan Email!");
          $("#err-email").fadeIn();
          email.addClass("err-input");
        }
        else if (regex.test(email.val()) == false) {
          $("#err-email").text("Email tidak benar!");
          $("#err-email").fadeIn();
          email.addClass("err-input");
        }
        else {
          $("#err-email").fadeOut();
          email.removeClass("err-input");
        }
      });
      pass.blur(function() {
        if (pass.val().length == 0) {
          $("#err-pass").text("Masukkan Kata sandi!");
          $("#err-pass").fadeIn();
          pass.addClass("err-input");
        }
        else if (pass.val().length < 6) {
          $("#err-pass").text("Kata sandi minimal 6 karakter!");
          $("#err-pass").fadeIn();
          pass.addClass("err-input");
        }
        else {
          $("#err-pass").fadeOut();
          pass.removeClass("err-input");
        }
      });
      re_pass.blur(function() {
        if (pass.val() != re_pass.val()) {
          $("#err-re-pass").text("Kata sandi tidak sama!");
          $("#err-re-pass").fadeIn();
          re_pass.addClass("err-input");
        }
        else {
          $("#err-re-pass").fadeOut();
          re_pass.removeClass("err-input");
        }
      });

    // validasi login
      email_login.blur(function() {
        if (email_login.val().length == 0) {
          $("#err-email-login").text("Masukkan Email!");
          $("#err-email-login").fadeIn();
          email_login.addClass("err-input");
        }
        else if (regex.test(email_login.val()) == false) {
          $("#err-email-login").text("Email tidak benar!");
          $("#err-email-login").fadeIn();
          email_login.addClass("err-input");
        }
        else {
          $("#err-email-login").fadeOut();
          email_login.removeClass("err-input");
        }
      });
    });



function cek_login()
{
  //Mengambil value dari input Email dan Kata sandi
  var email = $('#email_login');
  var pass = $('#pass_login').val();
  var url_login  = 'proses_login.php';
  var regex = /^([A-Za-z][A-Za-z0-9\-\.\_]*)\@([A-Za-z][A-Za-z0-9\-\_]*)(\.[A-Za-z][A-Za-z0-9\-\_]*)+$/;
    
  if (email.val().length == 0) {
    $("#err-email-login").text("Masukkan Email!");
    $("#err-email-login").fadeIn();
    email.addClass("err-input");
  }
  else if (regex.test(email.val()) == false) {
    $("#err-email-login").text("Email tidak benar!");
    $("#err-email-login").fadeIn();
    email.addClass("err-input");
  }
  else {
    email.removeClass("err-input");
    $("#err-email-login").fadeOut();

    // Menggunakan AJAX untuk mengirim data Login
    $.ajax({
      url   : url_login,
      //mengirimkan Email dan Kata sandi ke file proses_login.php
      data  : 'email='+email.val()+'&pass='+pass, 
      //Method pengiriman
      type  : 'POST',
      dataType: 'html',
      //Respon jika data berhasil dikirim
      success : function(pesan){
        if(pesan == 'ok'){
          window.location = 'index.php';
        }
        else{
          //Cetak peringatan untuk Email atau Kata sandi salah
          $("#err-email-login").text(pesan);
          $("#err-email-login").fadeIn();
        }
      },
    });
  }

}
function cek_mendaftar()
{
  //Mengambil value dari input Email dan Kata sandi
  var nama = $('#nama').val();
  var email = $('#email').val();
  var pass = $('#pass').val();
  var re_pass = $('#re-pass').val();
  var url_pendaftaran = 'proses_pendaftaran.php';
  
  // Menggunakan AJAX untuk mengirim data Pendaftaran
  $.ajax({
    url   : url_pendaftaran,     
    data  : 'nama='+nama+'&email='+email+'&pass='+pass+'&re-pass='+re_pass, 
    type  : 'POST',
    dataType: 'html',
    success : function(pesan){
      if (pesan == "sandi_beda") {
        $("#err-re-pass").text("Kata sandi tidak sama!");
      }
      else if(pesan == 'ok'){
        window.location = 'index.php';
      }
      else{
        $("#err-nama").text(pesan);
        $("#err-nama").fadeIn();
      } 
    },
  });
}
  </script>


</body>
</html>
