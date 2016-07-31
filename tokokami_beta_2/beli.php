<?php include 'head.php';


$id=$_GET['id'];
if(isset($_GET['id'])){
	$tampil=tampilbarang_per_id($id);
	while ($a=mysqli_fetch_assoc($tampil)) {
		$gambar_awal=$a['foto_barang'];
		$merk_awal 	=$a['nama_barang'];
		$harga_awal	=$a['harga_barang'];
		$deskripsi	=$a['deskripsi_barang'];
	}
}

if(isset($_POST['submit'])){
	$nama_barang 		= $_POST['nama_barang'];
	$size 				= $_POST['size'];
	$kaki 				= $_POST['kaki'];
	$harga 				= $_POST['harga'];
	$nama_pembeli 		= $_POST['nama_pembeli'];
	$email_pembeli 		= $_POST['email_pembeli'];
	$tlp_pembeli 		= $_POST['tlp_pembeli'];
	$alamat_pembeli		= $_POST['alamat_pembeli'];
	$pos 				= $_POST['pos'];

	if(tambah_pembelian($nama_barang,$size,$kaki,$harga,$nama_pembeli,$email_pembeli,$tlp_pembeli,$alamat_pembeli,$pos)){
		header('location:data_pembeli_tersimpan.php');
	}else{
		echo "<script>alert('Sepertinya ada kesalahan saat pengisian formulir, silahkan ulangi kembali')</script>";
	}
}

?>



	<form action="" method="post">
		<table>
			
			<tr>
				<td align="center"><label><b>Formulir Pembelian</b></label></td>
			</tr>

			<tr>
				<td class="judul">Nama Barang</td>
				<td><input readonly type="text" name="nama_barang" value="<?= $merk_awal;?>"></td>
			</tr>

			<tr>
				<td class="judul">Foto Barang</td>
				<td><img width="150" height="150" src="img/<?= $gambar_awal;?>"></td>
			</tr>

			<tr>
				<td class="judul">Pilih Size</td>
				<td><select name="size">
					<option value="-">Pilih Size</option>
					<option value="S">S</option>
					<option value="M">M</option>
					<option value="L">L</option>
					<option value="XL">XL</option>
					<option value="XXL">XXL</option>
				</select></td>
			</tr>

			<tr>
				<td class="judul">Ukuran Kaki</td>
				<td><input type="text" name="kaki" placeholder="No Sepatu"></td>

			</tr>

			<tr>
				<td class="judul">Harga</td>
				<td><input readonly  type="text" name="harga" value="Rp <?= $harga_awal;?>"></td>
			</tr>

			<tr>
				<td class="judul">Deskripsi</td>
				<td><textarea readonly cols="40" rows="10" placeholder="deskripsi produk"><?= $deskripsi;?></textarea></td>
			</tr>

			<tr>
			<td><label><b>Data Pembeli</b></label></td></tr>
			<tr>
				<td class="judul">Nama pembeli</td>
				<td><input type="text" name="nama_pembeli" placeholder="Nama pembeli" required></td>
			</tr>

			<tr>
				<td class="judul">Email Pembeli</td>
				<td><input type="email" name="email_pembeli" placeholder="Email pembeli" required></td>
			</tr>

			<tr>
				<td class="judul">Telepon/Handphone</td>
				<td><input type="number" name="tlp_pembeli" placeholder="Tlp/Hp pembeli" required></td>
			</tr>

			<tr>
				<td class="judul">Alamat lengkap Pengiriman<br>(alamat lengkap-kecamatan-kabupaten/kota-provinsi)</td>
				<td><textarea name="alamat_pembeli"  cols="40" rows="10" placeholder="alamat lengkap-kecamatan-kabupaten/kota-provinsi" required></textarea></td>
			</tr>

			<tr>
				<td class="judul">Kode Pos</td>
				<td><input type="number" name="pos" placeholder="Kode Pos"></td>
			</tr>

			<tr>
				<td colspan="2">Dengan menekan tombol BELI maka anda telah menyetujui segala peraturan yang telah di tetapkan oleh Tokokami. <a href="cara_beli.php">Baca aturan beli</a><br> *Jika pembelian sepatu masukan nomor sepatu anda di kolom nomor sepatu</td>
			</tr>

			<tr>
				<td colspan="2"><input type="submit" name="submit" class="beli" value="BELI"></td>			
			</tr>
		</table>
	</form>

<style type="text/css">
	table{
		width: 60%;
		margin: 1% auto;
		line-height: 20px;
	}

	td{
		margin: 1% auto;
	}

	.beli{
		width: 100%;
		border:0px;
		border-radius: 5px;
		background-color: #3FD43F;
		height: 40px;
		color: white;
		font-size: 1.5em;
	}

	@media screen and (max-width: 480px){
		table{
			width: 100%;
			height: 600px;
		}

		td{
			height: 30px;
			width: 80%;
		}

		.judul{
			display: none;
		}

		.form{
			font-size: 1em;
		}

		textarea{
			width: 100%;
		}
		
	}
</style>

<?php include 'foot.php';?>