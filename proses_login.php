<?php 
include "db.php";

// Mengecek apakah $_POST['email'] dan $_POST['pass'] ada
// Jika ada maka jalankan proses
if (isset($_POST['email']) && isset($_POST['pass'])){
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	// Jika Email atau Kata sandi kosong..
	if (empty($email) || empty($pass)) {

		// Maka tampilkan text
		echo "Masukkan data!";
	}
	else {

		//Meng-enkripsi Kata sandi
		$pass = md5($pass);

		// Memilih data dari table user berdasarkan email
		$sql = $db->query("SELECT * FROM user WHERE email = '$email'");

		// Mengambil data
		$data = $sql->fetch_array();

		// Mengecek jika user dengan email seperti yang diinputkan tidak ada
		if ($sql->num_rows == 0) {

			// Maka tampilkan text
			echo 'Email tidak terdaftar!';
		}

		// Jika email ada tetapi Kata sandi tidak sama seperti yang diinputkan maka..
		else if ($sql->num_rows == 1 && $data['password'] != $pass) {

			// Tampilkan text
			echo "kata_sandi_salah";
		}
		else {

			// Jika semua benar maka set cooki email dan pass
			setcookie('email', $email, time() + (86400 * 7), "/");
			setcookie('pass', $pass, time() + (86400 * 7), "/");
			echo "ok";
		}			
	}
}
 ?>