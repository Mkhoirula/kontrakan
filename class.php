<?php 

// Membuat Class user
class user {
	public function logged() {

		// Mengecek apakah Cookie email dan pass ada
		//Jika ada maka buat variable $user_email dan $user_pass
		if (isset($_COOKIE['email']) && isset($_COOKIE['pass'])) {
			$user_email = $_COOKIE['email'];
			$user_pass = $_COOKIE['pass'];
		}
		if (isset($user_email) && isset($user_pass)) {
			return true;
		}
		else return false;
	}
	public function email() {
		if (self::logged()) {

			//Mengecek apakah Cookie email ada
			if (isset($_COOKIE['email'])) {

				//Jika da maka kembalikan nilai dari Variable $_COOKIE['email']	
				return $_COOKIE['email'];
			}
		}
		else return false;
	}
	public function pass() {
		if (self::logged()) {

			//Mengecek apakah Cookie pass ada
			if (isset($_COOKIE['pass'])) {

				//Jika da maka kembalikan nilai dari Variable $_COOKIE['email']	
				return $_COOKIE['pass'];
			}
		}
		else return false;
	}
}


 ?>
