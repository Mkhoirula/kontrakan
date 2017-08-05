
<?php
include "db.php"; 
 if (isset($_POST['save'])){
 $fileName = $_FILES['gambar']['name'];
  // Simpan ke Database
  $sql = "INSERT INTO data_kontrakan (gambar) VALUES ('$fileName')";
  $db->query($sql);
  // Simpan di Folder Gambar
  move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$_FILES['gambar']['name']);
  echo"<script>alert('Gambar Berhasil diupload !');</script>"; 
 } 

$sql = "SELECT * FROM data_kontrakan";
$tampil = $db->query($sql);
while ($data = $tampil->fetch_array()){
// Tampilkan Gambar
echo "<img src='gambar/".$data['gambar_kontrakan']."' width='100px' height='100px'/>";
echo "</br>";
}
?>

<form method="post" enctype="multipart/form-data">
<td colspan="4">Upload Gambar (Ukuran Maks = 1 MB) : <input type="file" name="gambar" required /> | Keterangan : <input type="text" name="kete"  /> | 
<input type="submit" value="Upload" name="save"></td>
</form>
