
<?php 

include 'head.php';
if(isset($_POST['submit'])){
	$email = $_POST['email'];

	if(tambahemail($email)){
		echo "<script>alert('Terimakasih telah berlangganan dengan Tokokami')</script>";
	}else{
		echo "<script>alert('Silahkan isi email yang valid')</script>";
	}
}

while ($row=mysqli_fetch_assoc($resulttampilbarang)) { ?>

	<div class="kol-4" align="center">
		<div id="nama"><?php echo $row['nama_barang'];?></div>
		<div id="gambar"><img src="<?php echo $row['foto_barang'];?>"></div> 
		<div id="jenis"><?php echo $row['jenis_barang'];?></div><br>
		<div id="harga"><b>Rp <?php echo $row['harga_barang'];?></b></div><br>

		<a href=""><div id="beli">BELI</div></a>
	</div>
<?php } ?>

<?php include 'foot.php'; ?>


<style type="text/css">
	#nama{
		font-size: 1.5em;
	}

	#gambar img{
		width: 230px;
		height: 270px;
	}

	#beli{
		background-color: #3BCE3B;
		border:4px solid #3BCE3B;
		width: 30%;
		border-radius: 5px;
		color: white;
	}
</style>
