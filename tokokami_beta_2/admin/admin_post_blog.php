<?php

include 'admin_head.php';
$jenis=isset($_POST['jenis']) ? trim($_POST['jenis']):'';
$result =tampil_post_blog();
?>

<form>
	<table>
		<tr bgcolor="maroon">
			<td class="b">No</td>
			<td class="b">Foto Profil</td>
			<td class="b">Judul Post</td>
			<td class="b">Isi Post</td>
			<td class="b">Akses</td>


<?php

$no=1;

while ($a=mysqli_fetch_assoc($result)) { ?>

		<tr>
			<td><?= $no;?></td>
			<td><?= $a['foto_profil'];?></td>
			<td><?= $a['judul_post'];?></td>
			<td><?= $a['isi_post'];?></td>
			<td><a href="admin_edit_blog.php?id=<?= $a['id_post'];?>">Edit</a> | <a href="admin_delete_blog.php?id=<?= $a['id_post'];?>">Hapus</a></td>
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
