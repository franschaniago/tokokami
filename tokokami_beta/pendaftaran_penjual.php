<?php
include 'head.php'; 

if(isset($_POST['submit'])){
	$nama 	= $_POST['nama'];
	$alamat = $_POST['alamat'];
	$nomor 	= $_POST['nomor'];
	$sosmed = $_POST['sosmed'];
	$email 	= $_POST['email'];
	$pass 	= $_POST['pass'];
	$pass 	=md5('pass');
	$jenis 	= $_POST['jenis'];

	if(tambahdata_penjual($nama,$alamat,$nomor,$sosmed,$email,$pass,$jenis)){
		echo "<script>alert('Pendafatran Berhasil Silahkan Login Untuk Melakukan Penjualan')</script>";
	}else{
		echo "<script>alert('Sepertinya ada kesalahan saat pengisian data')</script>";
	}
}


?>

<h1 class="form_daftar">Form Pendafatran Penjual</h1><br>
<label>Silahkan isi data diri dengan sebenar-benarnya</label><br>
<label>Dengan menjadi anggota penjual di Tokokami maka anda wajib mematuhi segala peraturan di Tokokami <a href="cara_jual.php">Baca Peraturan</a></label>
<br><br>


<form action="" method="post">
	<table>
		<tr>
			<td>Nama Penjual/Toko/Perorangan</td>
			<td><input type="text" name="nama" required><label style="color:red">*</label></td>
		</tr>

		<tr>
			<td>Alamat lengkap penjual</td>
			<td><textarea rows="10" cols="40" placeholder="provinsi-kab/kota-kecamatan-kelurahan-alamat pemilik" name="alamat" required></textarea><label style="color:red">*</label></td>
		</tr>

		<tr>
			<td>Nomor Tlp/hp</td>
			<td><input type="number" name="nomor" required><label style="color:red">*</label>(Jika input lebih dari satu gunakan tanda - untuk memisahkan)</td>
		</tr>

		<tr>
			<td>Akun Sosial Media</td>
			<td><input type="text" name="sosmed" required><label style="color:red">*</label></td>
		</tr>

		<tr>
			<td>Email anda</td>
			<td><input type="email" name="email" required><label style="color:red">*</label></td>
		</tr>

		<tr>
			<td>Password Anda</td>
			<td><input type="password" name="pass" required><label style="color:red">*</label></td>
		</tr>


		<tr>
			<td>Jenis Barang yang dijual</td>
			<td><select name="jenis" required>
				<option value="fashion pria">fashion pria</option>
				<option value="fashion wanita">fashion wanita</option>
				<option value="fashion anak">fashion anak</option>
			</select><label style="color:red">*</label></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit" id="login" value="Daftar"></td>
		</tr>

		<tr>
			<td></td>
			<td><label style="color:red">*</label> Wajib di isi</td>
		</tr>

	</table>
</form>

<?php
include 'foot.php'; ?>

<style type="text/css">
	.form_daftar{
		text-align: center;
		font-size: 2em;
	}

	table{
		line-height: 30px;
		width: 100%;
	}
</style>