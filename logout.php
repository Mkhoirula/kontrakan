<?php 
include "class.php";
// Mengecek apakah dalam kondisi Login
if (user::logged()) {
	setcookie('email', $email, time() - 3600, "/");
	setcookie('pass', $pass, time() - 3600, "/");
	header('location: index.php');
}
// Jika tidak maka alihkan ke halaman index
else header('location: index.php');

 ?>