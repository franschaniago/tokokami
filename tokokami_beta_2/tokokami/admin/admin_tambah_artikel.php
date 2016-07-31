<?php
include 'admin_head.php';

if(isset($_POST['submit'])){
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];

	$nama 	= $_FILES['gambar']['name'];
	$size 	= $_FILES['gambar']['size'];
	$error 	= $_FILES['gambar']['error'];
	$asal	= $_FILES['gambar']['tmp_name'];

	$lokasi = $nama;
	$format = pathinfo($nama, PATHINFO_EXTENSION);

	if($error===0){
		if($format === "jpg" || $format === "png" || $format === "JPG" || $format === "PNG" ){
			if(tambah_artikel($lokasi,$judul,$isi)){
				echo "<script>alert('Tambah data Artikel Berhasil')</script>";
			}else{
				echo "<script>alert('Tambah data Artikel Gagal')</script>";
			}
		move_uploaded_file($asal, "../img/".$nama);
		}else{
			echo "<script>alert('Maaf format gambar anda harus JPG/PNG')</script>";
		}
	}else echo "<script>alert('Maaf Terjadi Kesalahan saat Upload data')</script>";

}


?>
<h1 align="center">Tambah Artikel</h1>
<form action="" method="post" enctype="multipart/form-data">
	<table align="center" id="tabel">
		<tr>
			<td style="color:black">Judul Artikel</td>
			<td><input type="text" name="judul" required></td>
		</tr>

		<tr>
			<td>Gambar</td>
			<td><input type="file" name="gambar" required></td>
		</tr>

		<tr>
			<td>Isi Artikel</td>
			<td><textarea cols="40" rows="10" name="isi"></textarea></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Tambah Data" class="tombol"></td>
		</tr>
	</table>
</form>

<?php
include 'admin_foot.php'; ?>

<style type="text/css">
	table{
		line-height: 30px;
		width: 50%;
	}

	#tabel{
		margin: 5px auto;
		margin-top: 10px;
	}
</style>