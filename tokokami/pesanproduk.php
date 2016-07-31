<link rel="stylesheet" type="text/css" href="style.css">	
<?php include "header.php"; ?>


		<div class="menukonten">
			<div class="konten">
			<h2>Pesan Produk disini</h2><br/>
<p>Silahkan isi formulir pemesanan ini dengan lengkap dan benar, jika sudah memesan anda akan mendapatkan konfirmasi dari admin mengenai produk yang anda pesan</p><br/><br/>
			

			<?php
			include "admin1104/akses.php";

				if(isset($_POST['kirim'])){
					if (tambahdata($_POST['nama'],$_POST['alamat'],$_POST['emailuser'],$_POST['subject'],$_POST['kode'],$_POST['nomorproduk'], $_POST['ukuran'], $_POST['jumlah'])) {

						header('location:pesanproduk.php');
					}else{
						echo "Gagal menambahkan data";
					}
				}

				
			?>

		


<form action="pesanproduk.php" method="post">
<body>

<table border=0 width="70%" style="height:40%">
	<tr>
		<td>Nama lengkap</td>
		<td><input type="text"  name="nama" required/></td>
	</tr> 

	<tr>
		<td>Alamat lengkap</td>
		<td><textarea rows="10" cols="30" name="alamat"></textarea></td>
	</tr>

	<tr>
		<td>Email Anda</td>
		<td><input type="email"  name="emailuser"></td>
	</tr>

	<tr>
		<td>Nomor Telepon/HP</td>
		<td><input type="number"  name="subject" required/></td>
	</tr>
	<tr>
		<td>Kode Produk</td>
		<td><select name="kode" required>
			<option value=""></option>
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			<option value="D">D</option>
			<option value="E">E</option>
			<option value="F">F</option>
			<option value="G">G</option>
		</select></td>
	</tr>

	<tr>
		<td>Nomor Produk</td>
		<td><select name="nomorproduk" required>
			<option value=""></option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
		</select></td>
	</tr>

	<tr>
		<td>Ukuran</td>
		<td><select name="ukuran">
			<option value="-">-</option>
			<option value="S">S</option>
			<option value="S">M</option>
			<option value="S">L</option>
			<option value="S">XL</option>
		</select></td>
	</tr>

	<tr>
		<td>Jumlah Beli</td>
		<td><input type="number" name="jumlah" required></td>
	</tr>

	<tr>
		<td></td>
		<td><input class="tombol" type="submit" name="kirim" value="Pesan Produk" onclick="tes()"></td>
	</tr>
</table></body></form><br><br>

<h2>UNTUK SAAT INI PEMESANAN VIA WEB SEDANG MENGALAMI PERBAIKAN DATA, SILAHKAN PESAN PRODUK ATAU JOIN DAGANGAN MU DENGAN WEB KAMI DENGAN CARA MEGHUBUNGI ADMIN VIA MOBILE</h2>

<style type="text/css">
	.tombol{
		background-color: #4CAD3D;
		color: white;
		font-size: 15px;
	}

	.tombol:hover{
		background-color: #7BD16D;
	}
</style>

<p>Jika ingin memesan via Sms/WhatsApp/BBM silahkan kirim pesanan anda dengan format berikut</p><br>
<p><b><u>Namalengkap#alamatlengkap#emailanda#Notlp#Kodeproduk#nomorproduk#<br>ukuran#Jumlahbeli</u></b></p><br>
<p>Kirim ke salah satu Nomor kontak admin kami(WhastApp/BBM/SMS)</p>

<br><br>
<p>Note : <i>Masukan Ukuran jika yang di beli adalah produk fashion atau sepatu, selain itu tidak perlu menuliskan ukuran</i></p>


			</div>

			<?php include "menu.php";?>
			</div>
		<div class="info"></div>
		<?php include "footer.php";?>
	</div>
