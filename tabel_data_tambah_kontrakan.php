<?php  
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
include 'navbar.php';
include 'db.php';
 ?>

 <div class="table-responsive">
<div class="container">
	<h1>Kontrakan Saya</h1>

<button type="submit" id="btn-tabel-data" class="btn btn-primary">
	+Tambah Kontrakan
</button>
<br>
<br>
	<?php 
	if (isset($_SESSION['pesan_berhasil'])) {
		echo '<div class="alert alert-success">'
		. $_SESSION['pesan_berhasil'] .'</div>';
		session_unset($_SESSION['pesan_berhasil']);
	}
	 ?>
	<table class="datatable table table-bordered">
		<thead>
			<th>Jenis kontrakan</th>
			<th>Nama kontrakan</th>
			<th>Alamat</th>
			<th>Nama pemilik kontrakan</th>
			<th>Pengelola</th>
			<th>No. HP pemilik kontrakan</th>
			<th>Harga bulanan</th>
			<th>Harga tahunan</th>
			<th>Pembayaran minimal</th>
			<th>Keterangan</th>
			<th>Aksi</th>
		</thead>
		<tbody>
			<?php 
			$query = $db->query("SELECT * FROM data_kontrakan");
			while ($data = $query->fetch_array()) {
				echo '
					<tr>
						<td>'. $data['jenis_kontrakan'] .'</td>
						<td>'. $data['nama_kontrakan'] .'</td>
						<td>'. $data['alamat'] .'</td>
						<td>'. $data['nama_pemilik_kontrakan'] .'</td>
						<td>'. $data['pengelola'] .'</td>
						<td>'. $data['no_hp_pemilik_kontrakan'] .'</td>
						<td>'. $data['harga_bulanan'] .'</td>
						<td>'. $data['harga_tahunan'] .'</td>
						<td>'. $data['pembayaran_minimal'] .'</td>
						<td>'. $data['keterangan'] .'</td>
						<td>Hapus | Edit</td>
					</tr>';
				
			}
			?>
		</tbody>
	</table>
 			</div>
			</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.datatable').DataTable();
		
	});
</script>

<script>
$(document).ready(function(){
    $("#button").click(function(){
        $("#myModal").modal();
    });
});
</script>

</body>
</html>
