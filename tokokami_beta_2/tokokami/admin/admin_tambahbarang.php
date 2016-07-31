<?php
include 'admin_head.php';

if(isset($_POST['submit'])){
	$merk =$_POST['merk'];
	$jenis=$_POST['jenis'];
	$ukuran =$_POST['size'];
	$harga=$_POST['harga'];
	$deskripsi=$_POST['deskripsi'];

	$nama 	= $_FILES['gambar']['name'];
	$size 	= $_FILES['gambar']['size'];
	$error 	= $_FILES['gambar']['error'];
	$asal	= $_FILES['gambar']['tmp_name'];

	$lokasi = $nama;
	$format = pathinfo($nama, PATHINFO_EXTENSION);

	if($error===0){
		if($format === "jpg" || $format === "png" || $format === "JPG" || $format === "PNG" ){
			if(tambahbarang($merk,$lokasi,$jenis,$ukuran,$harga,$deskripsi)){
				echo "<script>alert('Tambah data Barang Berhasil')</script>";
			}else{
				echo "<script>alert('Tambah data Barang Gagal')</script>";
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
	<table align="center" id="tabel">
		<tr>
			<td style="color:black">Merk Barang</td>
			<td><input type="text" name="merk" required></td>
		</tr>

		<tr>
			<td>Gambar</td>
			<td><input type="file" name="gambar" required></td>
		</tr>

		<tr>
			<td>Jenis Barang</td>
			<td><select name="jenis" required>
				<option value="-"> </option>
				<option value="Fashion Pria">Fashion Pria</option>
				<option value="Fashion Wanita">Fashion Wanita</option>
				<option value="Fashion Anak">Fashion Anak</option>
				<option value="Perkakas rumah tangga">Alat rumah tangga</option>
				<option value="Boneka">Boneka</option>
				<option value="Jam Tangan">Jam Tangan</option>
				<option value="Jilbab">Jilbab</option>
				<option value="Gamis">Gamis</option>
				<option value="Sepatu Wanita">Sepatu Wanita</option>
				<option value="Sepatu Pria">Sepatu Pria</option>
				<option value="Jersey">Jersey</option>
				<option value="Lukisan">Lukisan</option>
				<option value="Alat olah raga">Alat olah raga</option>
				<option value="peralatan komputer">Peralatan Komputer</option>

			</select></td>
		</tr>

		<tr>
			<td>Size</td>
			<td><select name="size" required>
				<option value="-"> </option>
				<option value="S">S</option>
				<option value="M">M</option>
				<option value="L">L</option>
				<option value="XL">XL</option>
				<option value="XXL">XXL</option>
				<option value="All size">All size</option>
			</select></td>
		</tr>

		<tr>
			<td>Harga Barang</td>
			<td><input type="number" name="harga" required></td>
		</tr>

		<tr>
			<td>Deskripsi Barang</td>
			<td><textarea cols="40" rows="10" name="deskripsi"></textarea></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Tambah Barang" class="tombol"></td>
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