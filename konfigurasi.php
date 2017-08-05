<?php 
require_once "class.php";
require_once "db.php";

function data_kontrakan($id, $user_id, $kolom) {
	global $db;
	$u = $db->query("SELECT * FROM data_kontrakan WHERE id = '$id' AND user_id = '$user_id'")->fetch_array();
	if (isset($kolom)) {
		$d = $u[$kolom];
		echo $d;
	}
}
 ?>