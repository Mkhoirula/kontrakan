<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
  
  #ahyadi {
    height: 320px;
    background: -webkit-linear-gradient(left, orange, white, orange); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(left,orange, white, orange); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(left, orange, white, orange); /* For Fx 3.6 to 15 */
    background: linear-gradient(to right, orange, white, orange); /* Standard syntax (must be last) */
}

</style>

</head>
<body>




  <div id="myCarousel" class="carousel slide" data-ride="carousel">

 <!-- Modal -->
    <div class="modal fade" id="myModallogin" role="dialog">
        <div class="modal-dialog">
    


 <!-- Modal content-->
        <div class="modal-content"  id="ahyadi">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal"> <font color="red"> × </font> </button>
          <h1> <center>MASUK</center></h1>
        </div>


    <div class="modal-body">
       <form role="form" action="proses_login.php" method="post">
           <div class="form-group">
              <span style="color: red;" id="err-email"></span>
              <label for="usrname"> Email</label>
              <input type="email" class="form-control" id="username" placeholder="Enter email">
              <span style="color: red;" id="err-pass"></span>
              <label> Password</label>
              <input type="Password" class="form-control" id="pasword" placeholder="Pasword">
             </div>
             <button type="submit" class="btn btn-primary">Login 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
              
            <button type="submit" class="btn btn-danger" data-dismiss="modal">
              <span class="glyphicon glyphicon-remove"></span> Cancel
            </button>
          <br>
    <label>Belum Punya akun ?</label><a data-toggle="modal" data-target="#myModaldaftar" data-dismiss="modal"><b> Daftar</b></a>

    </div>
        </form>
            </div>  
                 </div>
            </div>
        </div>
    </div>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">

 <!-- Modal -->
  <div class="modal fade" id="myModaldaftar" role="dialog">
  <div class="modal-dialog">
    


 <!-- Modal content-->
      <div class="modal-content"  id="ahyadi">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal"> <font color="red"> × </font> </button>
          <h1> <center>DAFTAR</center></h1>
        </div>


        <div class="modal-body">
          <form role="form">
           <div class="form-group">
              <span style="color: red;" id="err-email"></span>
              <label for="usrname"> Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email">
              <span style="color: red;" id="err-pass"></span>
              <label> Password</label>
              <input type="Password" class="form-control" id="pass" placeholder="Pasword">
            </div>

              <button type="submit" class="btn btn-primary">Daftar 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
              
              <button type="submit" class="btn btn-danger" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
       <br>
<label>Sudah Punya akun ?</label><a data-toggle="modal" data-target="#myModallogin" data-dismiss="modal"> <b> Login </b></a>
</div>
</form>
        </div>
      
    </div>
  </div>
</div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
//    $("#tombol-daftar").onclick(function() {
      var email = $("#email");
      var pass = $("#pass");
      var error = $("#error");
      var err = false;
      var regex = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
     
        email.blur(function() {
          if (!regex.test(email)) {
            $("#err-email").text("Email Anda salah!");
          }
        
      });

/*      if (nama.length == 0) {
        error.text("Masukkan nama!");
        err = true;
      }
      if (nama.length < 4 || nama > 15) {
        error.text("Nama harus berjumlah 4-15 karakter!");
        err = true;
      }
//      if (regex.test(email) == false) {
//        error.text("Email Anda salah!");
//        err = true;
//      }
      if (pass.length < 6) {
        error.text("Kata sandi minimal 6 karakter!");
        err = true;
      }
      if (pass != re-pass) {
        error.text("Kata sandi tidak sama!");
        err = true;
      }
      if (err == true) {
        error.css("display", "block");
        return false;
      } */
//    });

  });
</script>
</body>
</html>