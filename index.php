<?php 
include 'navbar.php';

 ?>

<center>
<img src="http://kreasirumah.net/wp-content/uploads/2016/02/ruko-minimalis-sederhana.jpg" style="width: 30%; height: 220px">
</center>
<br>

<!-- Filter pencarian -->
<div id="filter">
<center>
  <form class="form-inline">
    <div class="form-group">
      <select class="form-control" ">
        <option>Tipe kontrakan</option>
        <option> Rumah </option>
        <option>Toko</option>
        <option> Gedung </option>
        <option> Apartemen </option>
      </select>      
    </div>
    <div class="form-group" >
      <select placeholder="Harga" class="selectize form-control" style="width: 155px;" >
        <option value="">Harga</option>
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
      <select placeholder="Ketik nama tempat atau alamat..." class="selectize form control" style="width: 300px;">
        <option value="">Ketik nama tempat atau alamat...</option>
        <option label="Aceh" value="Aceh" placheoder="aceh">aceh</option>
        <option label="Lampung" value="Lampung">Lampung</option>
        <option label="Jakarta" value="Jakarta">Jakarta</option>
        <option label="Bandung" value="Bandung">Bandung</option>
        <option label="Tanggrang" value="Tanggrang">Tanggrang</option>
      </select>
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
    </script>
    <div class="container">
    <div class="row">
    <div class="col-md-3">
    <div class="gallery">
  <a target="_blank" href="img_fjords.jpg">
    <img src="https://blog-cdn.duitpintar.com/wp-content/uploads/2016/04/meningkatkan-harga-rumah-3-1.jpg" alt="Trolltunga Norway" width="300" height="200">
  </a>
  <div class="desc" >  
  
    Rp50.000.000 <br>
    paaaa <br>
    lklk <br>
    jjk <br>

  </div>
</div>
    </div>

      <div class="col-md-3">
  <div class="gallery">
    <a target="_blank" href="img_forest.jpg">
      <img src="http://www.sabahtourism.com/sites/default/files/styles/medium-3x2-image/public/RS17481_RT%20Day%20View-scr.jpg?itok=-iQ3rVug" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
  </div>

      <div class="col-md-3">
  <div class="gallery">
    <a target="_blank" href="img_lights.jpg">
      <img src="https://s-media-cache-ak0.pinimg.com/originals/45/bf/72/45bf729aecd4056753eb2510678ab75e.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
  </div>

    <div class="col-md-3">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="http://www.sabahtourism.com/sites/default/files/styles/medium-3x2-image/public/RS17481_RT%20Day%20View-scr.jpg?itok=-iQ3rVug" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
  </div>

  </div>
</div>

<script type="text/javascript">
  // untuk mengaktifkan selectize di selector yang di tentukan
  // setiap tag select yang ada atribut class yang memiliki nilai selectize 
  // maka akan berubah menjadi selectize 
  $('.selectize').selectize();
</script>
<script>
  
    $(document).ready(function() {
      $('.gallery').hover(function() {
        $(this).css('box-shadow', '0px 0px 0px grey');
      });
      $('.gallery').mousemove(function() {
        $(this).css('box-shadow', '1px 1px 20px grey');
      });
</script>
</body>
</html>
