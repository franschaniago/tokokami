<?php
include 'akses/akses.php';

$result=tampiljenisbarang();

if(isset($_POST['submit'])){
	$merk =$_POST['merk'];
	$jenis=$_POST['jenis'];
	$harga=$_POST['harga'];

	$nama 	= $_FILES['gambar']['name'];
	$size 	= $_FILES['gambar']['size'];
	$error 	= $_FILES['gambar']['error'];
	$asal	= $_FILES['gambar']['tmp_name'];

	$lokasi = "img/kaos_pria/".$nama;
	$format = pathinfo($nama, PATHINFO_EXTENSION);

	if($error===0){
		if($format === "jpg" || $format === "png" || $format === "JPG" || $format === "PNG" ){
			if(tambahbarang_kaospria($merk,$lokasi,$jenis,$harga)){
				echo "<script>alert('Tambah data Barang Berhasil')</script>";
			}else{
				echo "<script>alert('Tambah data Barang Gagal')</script>";
			}
		move_uploaded_file($asal, "img/kaos_pria/".$nama);
		}else{
			echo "<script>alert('Maaf format gambar anda harus JPG/PNG')</script>";
		}
	}else echo "<script>alert('Maaf Terjadi Kesalahan saat Upload data')</script>";

}


?>
<form action="" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Merk Barang</td>
			<td><input type="text" name="merk"></td>
		</tr>

		<tr>
			<td>Gambar</td>
			<td><input type="file" name="gambar"></td>
		</tr>

		<tr>
			<td>Jenis Barang</td>
			<td><select name="jenis">
				<option value="kaospria">kaos pria</option>
				<option value="kaoswanita">kaos wanita</option>
				<option value="kaosanak">kaos anak</option>
			</select></td>
		</tr>

		<tr>
			<td>Harga Barang</td>
			<td><input type="number" name="harga"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="Submit" name="submit" value="Tambah Barang"></td>
		</tr>
	</table>
</form>