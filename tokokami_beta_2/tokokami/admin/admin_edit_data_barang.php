<?php
include 'admin_head.php';

$id=$_GET['id'];
if(isset($_GET['id'])){
	$tampil=tampilbarang_per_id($id);
	while ($a=mysqli_fetch_assoc($tampil)) {
		$merk_awal 	=$a['nama_barang'];
		$gambar_awal=$a['foto_barang'];
		$harga_awal	=$a['harga_barang'];
	}
}

if(isset($_POST['submit'])){
	$merk =$_POST['merk'];
	$jenis=$_POST['jenis'];
	$harga=$_POST['harga'];

	$nama 	= $_FILES['gambar']['name'];
	$size 	= $_FILES['gambar']['size'];
	$error 	= $_FILES['gambar']['error'];
	$asal	= $_FILES['gambar']['tmp_name'];

	$lokasi = $nama;
	$format = pathinfo($nama, PATHINFO_EXTENSION);

	if($error===0){
		if($format === "jpg" || $format === "png" || $format === "JPG" || $format === "PNG" ){
			if(update_databarang($merk,$lokasi,$jenis,$harga, $id)){
				header('location:admin_data_barang.php?='.$id);
			}else{
				echo "<script>alert('Update data Barang Gagal')</script>";
			}
		move_uploaded_file($asal, "../img/".$nama);
		}else{
			echo "<script>alert('Maaf format gambar anda harus JPG/PNG')</script>";
		}
	}else echo "<script>alert('Maaf Terjadi Kesalahan saat Upload data')</script>";

}


?>
<h1 align="center">Tambah Data Barang</h1>
<form action="" method="post" enctype="multipart/form-data">
	<table align="center">
		<tr>
			<td style="color:black">Merk Barang</td>
			<td><input type="text" name="merk" value="<?= $merk_awal;?>"></td>
		</tr>

		<tr>
			<td>Gambar</td>
			<td><img width="100" height="100" src="../img/<?= $gambar_awal;?>"><input type="file" name="gambar"></td>
		</tr>

		<tr>
			<td>Jenis Barang</td>
			<td><select name="jenis" required>
				<option value="fashion pria">fashion pria</option>
				<option value="fashion wanita">fashion wanita</option>
				<option value="fashion anak">fashion anak</option>
			</select></td>
		</tr>

		<tr>
			<td>Harga Barang</td>
			<td><input type="number" name="harga" value="<?= $harga_awal;?>" required></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="Submit" name="submit" value="Update Barang" class="tombol"></td>
		</tr>
	</table>
</form>

<?php include 'admin_foot.php';?>