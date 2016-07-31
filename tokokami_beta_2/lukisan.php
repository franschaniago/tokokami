<?php include 'head.php';?>



	<?php
	$result = tampil_lukisan();
	while ($row=mysqli_fetch_assoc($result)) { ?>

		<div class="kol-4" align="center">

			<div id="nama"><?php echo $row['nama_barang'];?></div>

			<div id="gambar"><img src="img/<?php echo $row['foto_barang'];?>"></div> 

			<div id="size"><?php echo $row['size'];?></div><br>

			<div id="harga">Rp <?php  echo $row['harga_barang'];?></div><br>

			<div id="beli"><a href="beli.php?id=<?= $row['id_barang'];?>">BELI</a></div>
		</div>

<?php } ?>



<?php include 'foot.php';?>