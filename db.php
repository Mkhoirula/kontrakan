<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kontrakan";
$dbname2 = "gambar";


// Create connection
$db = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

$db = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

// Membuat koneksi ke database
/**$db	= new mysqli('localhost', 'root', '', 'kontrakan');
if ($db->connect_error) {

	// Jika error maka tampilkan errornya
	echo $db->error;
}**/
 ?>