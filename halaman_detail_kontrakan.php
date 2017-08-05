<?php 
require_once 'konfigurasi.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title><?=data_kontrakan($_GET['id'], user::id(), 'nama_kontrakan') ?></title>
</head>
<body>
<?php 
include 'navbar.php';
 ?>

</body>
</html>