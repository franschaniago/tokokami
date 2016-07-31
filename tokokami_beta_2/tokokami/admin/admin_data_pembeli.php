<?php

include 'admin_head.php';
$jenis=isset($_POST['jenis']) ? trim($_POST['jenis']):'';
$result =tampil_data_pembeli();
?>
<h2>Data Pembeli</h2>
<form>
	<table>
		<tr bgcolor="maroon">
			<td class="b">No</td>
			<td class="b">Nama Barang</td>
			<td class="b">Size</td>
			<td class="b">Ukuran Kaki</td>
			<td class="b">Harga</td>
			<td class="b">Nama Pembeli</td>
			<td class="b">Email Pembeli</td>
			<td class="b">Tlp Pembeli</td>
			<td class="b">Alamat Pembeli</td>
			<td class="b">Kode Pos</td>
			<td class="b">Akses</td>
		</tr>

<?php

$no=1;

while ($a=mysqli_fetch_assoc($result)) { ?>

		<tr>
			<td><?= $no;?></td>
			<td><?= $a['nama_barang'];?></td>
			<td><?= $a['size'];?></td>
			<td><?= $a['ukuran_kaki'];?></td>
			<td><?= $a['harga'];?></td>
			<td><?= $a['nama_pembeli'];?></td>
			<td><?= $a['email_pembeli'];?></td>
			<td><?= $a['tlp_pembeli'];?></td>
			<td><?= $a['alamat_pembeli'];?></td>
			<td><?= $a['pos'];?></td>
			<td><a href="admin_delete_pembeli.php?id=<?= $a['id_pembeli'];?>">HAPUS</a></ABBR></td>
		</tr>
		<?php $no++;?>
		<?php } ?>
	</table>
</form>


<style type="text/css">
	table{
		width: 100%;
		line-height: 30px;
	}

	td{
		text-align: center;
		color: black;
	}

	.b{
		color: white;
	}
</style>











<?php
include 'admin_foot.php';?>
