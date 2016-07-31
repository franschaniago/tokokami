<?php
include 'admin_head.php';
$jenis=isset($_POST['jenis']) ? trim($_POST['jenis']):'';
$result =tampil_tabel($jenis);
?>

<form method="post">
	<table>
		<tr>
			<td>Tampilkan tabel berdasarkan</td>
			<td><select name="jenis" required>
				<option value="-"> </option>
				<option value="Fashion Pria">Fashion Pria</option>
				<option value="Fashion Wanita">Fashion Wanita</option>
				<option value="Fashion Anak">Fashion Anak</option>
				<option value="Perkakas rumah tangga">Perkakas rumah tangga</option>
				<option value="Boneka">Boneka</option>
				<option value="Jam Tangan">Jam Tangan</option>
				<option value="Jilbab">Jilbab</option>
				<option value="Gamis">Gamis</option>
				<option value="Sepatu Wanita">Sepatu Wanita</option>
				<option value="Sepatu Pria">Sepatu Pria</option>
				<option value="Jersey">Jersey</option>
				<option value="Lukisan">Lukisan</option>
				<option value="Alat olah raga">Alat olah raga</option>
				<option value="Peralatan Komputer">Peralatan Komputer</option>
			</select></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Tampilkan" ></td>
		</tr>
	</table>
</form>


<form>
	<table>
		<tr bgcolor="maroon">
			<td class="b">No</td>
			<td class="b">Merk Barang</td>
			<td class="b">Gambar</td>
			<td class="b">Jenis Barang</td>
			<td class="b">Harga Barang</td>
			<td class="b">Akses</td>
		</tr>

<?php

$no=1;

while ($a=mysqli_fetch_assoc($result)) { ?>

		<tr>
			<td><?= $no;?></td>
			<td><?= $a['nama_barang'];?></td>
			<td><img width="50" height="50" src="../img/<?php echo $a['foto_barang'];?>"</td>
			<td><?= $a['jenis_barang'];?></td>
			<td><?= $a['harga_barang'];?></td>
			<td><a href="admin_edit_data_barang.php?id=<?= $a['id_barang'];?>">EDIT</a> | <a href="admin_delete_barang.php?id=<?= $a['id_barang'];?>">HAPUS</a></ABBR></td>
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

	@media screen and (max-width: 728px){
		table{
			width: 100%;
		}
	}
</style>











<?php
include 'admin_foot.php';?>