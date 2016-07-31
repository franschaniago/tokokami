<?php

include "akses.php";


$result=tampil();
//print_r($result);

?>



<h2>Laporan Pembelian Tokokami</h2><br><br>
<a href="tampildata.php">Refresh Data</a><br>
<div id="body">
	
	<div class="col-9">
		Nomor
	</div>

	<div class="col-9">
		Nama
	</div>

	<div class="col-9">
		Alamat
	</div>

	<div class="col-9">
		Email
	</div>

	<div class="col-9">
		Nomor Tlp
	</div>

	<div class="col-9">
		Kode Produk
	</div>

	<div class="col-9">
		Nomor Produk
	</div>

	<div class="col-9">
		Ukuran
	</div>

	<div class="col-9">
		Jumlah Beli
	</div>
</div>

<div class="clear"></div>

<div id="body">

<?php while ($row=mysql_fetch_assoc($result)) {?>
	<div class="row">
	<div class="col-9">
		<?php echo $row['no'];?>
	</div>

	<div class="col-9">
		<?php echo $row['nama_lengkap'];?>
	</div>

	<div class="col-9">
		<?php echo $row['alamat'];?>
	</div>

	<div class="col-9">
		<?php echo $row['email'];?>
	</div>

	<div class="col-9">
		<?php echo $row['nomor_hp'];?>
	</div>

	<div class="col-9">
		<?php echo $row['kode_produk'];?>
	</div>

	<div class="col-9">
		<?php echo $row['nomor_produk'];?>
	</div>

	<div class="col-9">
		<?php echo $row['ukuran'];?>
	</div>

	<div class="col-9">
		<?php echo $row['jumbel'];?>
	</div>
	</div>
	<?php } ?>
</div>

<style type="text/css">
	.col-9{
		float: left;
		width: 11.1%;
		background-color:white;//#03A9F4
		color: black;
	}

	body{
		font-family: arial;
	}

	.clear{
		clear: both;
	}

	.row{
		display: inline-block;
		position: relative;
		width: 100%;

	}
</style>