<?php
include 'admin_head.php';

$id=$_GET['id'];
if(isset($_GET['id'])){
	$tampil=tampilblog_per_id($id);
	while ($a=mysqli_fetch_assoc($tampil)) {
		$foto_awal 	=$a['foto_profil'];
		$judul_awal	=$a['judul_post'];
		$isi_awal	=$a['isi_post'];
	}
}

if(isset($_POST['submit'])){
	$judul 	=$_POST['judul'];
	$isi 	=$_POST['isi'];


	$nama 	= $_FILES['gambar']['name'];
	$size 	= $_FILES['gambar']['size'];
	$error 	= $_FILES['gambar']['error'];
	$asal	= $_FILES['gambar']['tmp_name'];

	$lokasi = $nama;
	$format = pathinfo($nama, PATHINFO_EXTENSION);

	if($error===0){
		if($format === "jpg" || $format === "png" || $format === "JPG" || $format === "PNG" ){
			if(update_blog($lokasi, $judul, $isi, $id)){
				header('location:admin_post_blog.php?='.$id);
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
			<td style="color:black">Judul Artikel</td>
			<td><input type="text" name="judul" value="<?= $judul_awal;?>"></td>
		</tr>

		<tr>
			<td>Gambar</td>
			<td><img width="100" height="100" src="../img/<?= $foto_awal;?>"><input type="file" name="gambar"></td>
		</tr>

		<tr>
			<td>Isi Artikel</td>
			<td><textarea rows="10" cols="40" name="isi"><?= $isi_awal;?></textarea></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Update Artikel" class="tombol"></td>
		</tr>
	</table>
</form>

<?php include 'admin_foot.php';?>