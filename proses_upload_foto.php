<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post" enctype="multipart/form-data">
		<td colspan="4">Upload Gambar (Ukuran Maks = 1 MB) : <input type="file" name="gambar" required /> | Keterangan : <input type="text" name="kete"  /> | 
		<input type="submit" value="Upload" name="save"></td>
	</form>

<?php
	
	include "koneksi.php"; 
	 if (isset($_POST['save'])){
	 $fileName = $_FILES['gambar']['name'];
	  // Simpan ke Database
	  $sql = "INSERT INTO simpan (gambar, keterangan) VALUES ('$fileName', '".$_POST['keterangan']."')";
	  mysql_query($sql);
	  // Simpan di Folder Gambar
	  move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$_FILES['gambar']['name']);
	  echo"<script>alert('Gambar Berhasil diupload !')</script>"; 
 } 

	
	$sql = "SELECT * FROM simpan";
	$tampil = mysql_query($sql);
	while ($data = mysql_fetch_array($tampil)){
	// Tampilkan Gambar
	echo "<img src='gambar/".$data['gambar']."' width='100px' height='75px'/>";
	echo "</br>";
	echo $data['keterangan'];
}
?>

</body>
</html>