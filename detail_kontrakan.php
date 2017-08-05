<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
require_once 'navbar.php';

 ?>
<div class="container">
	<h1>Kontrakan Saya</h1>

<a href="form.php"><button class="btn btn-default" >Tambah Kontrakan</button></a>
<?php
$user_data = $db->query("SELECT * FROM user WHERE email = '". user::email() ."'")->fetch_array(); 

 ?>
<br>
<br>
	<?php 
	if (isset($_SESSION['pesan_berhasil_menambah'])) {
		echo '<div class="alert alert-success">'
		. $_SESSION['pesan_berhasil_menambah'] .'</div>';
		session_unset($_SESSION['pesan_berhasil_menambah']);
	}
	if (isset($_SESSION['berhasil_edit'])) {
		echo '<div class="alert alert-success">'
		. $_SESSION['berhasil_edit'] .'</div>';
		session_unset($_SESSION['berhasil_edit']);
	}
	if (isset($_SESSION['id_kosong'])) {
		echo '<div class="alert alert-danger">'
		. $_SESSION['id_kosong'] .'</div>';
		session_unset($_SESSION['id_kosong']);
	}
	 ?>

	 <div class="table-responsive">
	<table class="datatable table table-bordered ">
		<thead>
			<th>Jenis kontrakan</th>
			<th>Nama kontrakan</th>
			<th>Kota</th>
			<th>Alamat</th>
			<th>Nama pemilik kontrakan</th>
			<th>No. HP pemilik kontrakan</th>
			<th>Harga bulanan</th>
			<th>Harga tahunan</th>
			<th>Pembayaran minimal</th>
			<th>Keterangan</th>
			<th>Aksi</th>
		</thead>
		<tbody>

		<?php 
			$query = $db->query("SELECT * FROM data_kontrakan WHERE user_id = '". $user_data['id'] ."'");
			while ($data = $query->fetch_array()) {
				echo '
					<tr>
						<td>'. $data['jenis_kontrakan'] .'</td>
						<td>'. $data['nama_kontrakan'] .'</td>
						<td>'. $data['alamat'] .'</td>
						<td>'. $data['nama_pemilik_kontrakan'] .'</td>
						<td>'. $data['no_hp_pemilik_kontrakan'] .'</td>
						<td>'. $data['harga_bulanan'] .'</td>
						<td>'. $data['harga_tahunan'] .'</td>
						<td>'. $data['pembayaran_minimal'] .'</td>
						<td>'. $data['keterangan'] .'</td>
						<td><a href="halaman_edit_data.php?id='.$data['id'].'" class="btn btn-warning">Edit</a> | ';
						echo '<form action="proses_hapus_data.php" method="get" class="js-confirm" data-confirm="Apaka Anda Ingin Menghapus Data Ini?"><input type="hidden" name="id" value="'.$data['id'].'"><button type="submit" class="btn btn-danger">Hapus</button></form> | <a href="halaman_edit_data.php?id='.$data['id'].'" class="btn btn-warning">Detail</a> </td>
					</tr>';
				
			}
			?>
		</tbody>
	</table>
		</div>
			</div>
<!-- proses js data table -->
<script type="text/javascript">
	$(document).ready(function(){
		$('.datatable').DataTable();
		
	});
</script>

<!-- proses js confirmasi hapus data kontrakan -->
<script type="text/javascript">
  // confirm delete
    $(document.body).on('submit','.js-confirm', function () {
    var $el = $(this)
    var text = $el.data('confirm') ? $el.data('confirm') : 'Anda yakin melakukan tindakan ini\
  ?'
    var c = confirm(text);
    return c;
  }); 
</script>
<!-- <pre>
	
<?php 
// require_once 'db.php';
// $user_data = $db->query("SELECT * FROM user WHERE email = '". user::email() ."'")->fetch_array(); 
// print_r($user_data);
 ?>
</pre>
 -->
 </body>
 </html>