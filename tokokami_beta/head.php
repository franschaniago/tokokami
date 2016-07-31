<?php

include_once 'akses/akses.php';

$resulttampilbarang = tampilbarang();
?>

<link rel="stylesheet" type="text/css" href="style.css">

<div id="head">
	<p>Tokokami</p>
	<input type="search" name="cari" id="cari" class="text" placeholder="Cari Barang">
	<div id="akun">
		<ul>
			<li id="login"><a href="login.php">Login</a></li>
			<li id="daftar"><a href="pendaftaran_penjual.php">Daftar Sebagai Penjual</a></li>
		</ul>
	</div>
</div>
<nav>
	<ul>
		<li><a href="index.php">Beranda</a></li>
		<li><a href="cara_beli.php">Cara Pembelian</a></li>
		<li><a href="cara_jual.php">Cara Penjualan</a></li>
		<li><a href="">Cara Pembayaran</a></li>
		<li><a href="">Hubungi kami</a></li>
		<li><a href="">Tentang Tokokami</a></li>
	</ul>
</nav>
<div id="konten">