<?php 
include "db.php";

// Mengecek apakah user datang dari halaman index atau bukan
// Jika ya maka lakukan proses
if (isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['re-pass'])) {
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$re_pass = $_POST['re-pass'];

	// Mengecek apakah ada kolom yang kosong
	// Jika ya maka..
	if (empty($nama) || empty($email) || empty($pass) || empty($re_pass)) {

		// Tampilkan text
		echo "Isi semua kolom!";
	}
	else {

		// Jika kata sandi tidak sama dengan pengulangan kata sandi
		if ($pass != $re_pass) {
			echo "sandi_beda";
		}
		else {

			// Meng-enkripsi kata sandi
			$pass = md5($pass);

			//Jika email yang dimasukkan sudah ada di database
			if ($db->query("SELECT * FROM user WHERE email = '$email' AND password = '$pass'")->num_rows == 1) {
				echo "Email ini sudah terdaftar!";
			}
			else {

				// Jika semua data sudah benar
				// Maka masukkan data ke database dan set cookie 
				if ($db->query("INSERT INTO user SET nama = '$nama', email = '$email', password = '$pass'")) {
					setcookie('email', $email, time() + (86400 * 7), "/");
					setcookie('pass', $pass, time() + (86400 * 7), "/");
					echo "ok";
				}
				else echo $db->error;			
			}			
		}
	}

}

 ?>