<?php 
include 'head.php';


$id=$_GET['id'];
$tampil_komen=tampil_komentar_per_id($id);
$jumlah=mysqli_num_rows($tampil_komen);

if(isset($_GET['id'])){
	$result = tampil_blog_per_id($id);
	while ($a=mysqli_fetch_assoc($result)) {
		$id_awal 	=$a['id_post'];
		$foto_awal 	=$a['foto_profil'];
		$judul_awal	=$a['judul_post'];
		$isi_awal	=$a['isi_post'];
	}
}
if(isset($_POST['submit'])){
	$id_post	=$_POST['artikel'];
	$nama 		=$_POST['nama'];
	$komen 		=$_POST['komen'];

	if(tambah_komentar($id_post,$nama,$komen)){
		header('location:blog_single.php?id='.$id);
	}else{
		echo "gagal";
	}
}

?>
<div id="posting">

			<div id="foto"><img width="80" height="80" src="img/<?= $foto_awal;?>"></div>

			<div id="judul">
				<b><?= $judul_awal;?></a></b>
			</div><br>


			<div id="isi"> <?= $isi_awal;?></div><br>
</div>
		<form action="" method="post">

					<div class="artikel">
						<?= $jumlah;?> Komentar | Artikel Ke<input id="artikel" readonly type="text" name="artikel" value="<?= $id_awal;?>"> 
						
					</div>

					<div id="nama_pengomentar">
						<input type="text" name="nama" placeholder="Nama anda" required>
					</div><br>

					<div id="isi_komen">
						<textarea name="komen" cols="80" rows="5" placeholder="Tuliskan komentar anda" required></textarea>
					</div><br>

					<input class="submit" type="submit" name="submit" value="Komentar"><br>

					<?php while ($row=mysqli_fetch_assoc($tampil_komen)) {?>
					<br>

					<div class="isi_komentar">
						<div class="nama"><b> <?= $row['nama_pengomentar'];?></b> <p> <?= $row['waktu'];?></p></div>
						<div class="isi"> <?= $row['isi_komen'];?></div>
					</div>

					<?php } ?>

		</form>








<?php include 'foot.php';?>

<style type="text/css">
	p{
		font-size: 0.7em;
	}
	.blog{
		width: 70%;
		margin: 1% auto;
		line-height: 20px;
	}

	.isi_komentar{
		border:1px solid gray;
	}

	.nama{
		background-color: #51A9C1;
		color: white;
	}

	.isi{
		padding: 10px;
	}

	#artikel{
		font-style: italic;
		border:0px;
		border:0px;
	}


	#isi{
		text-align: justify;
	}

	#foto{
		float: left;
	}

	.submit{
		border: 2px solid #3BCE3B;
		background-color: #3BCE3B;
		color:white;
	}

	#posting{
		padding-top: 10px;
	}

	@media screen and (max-width: 480px){

		body{
			font-size: 10px;
		}

		#foto img{
			width: 50px;
			height: 50px;
		}

		#foto{
			border: 5px solid #f1f1f1;
		}

		#judul{
			font-size: 10px;
		}

		#isi{
			font-size: 13px;
		}

		.artikel{
			font-size: 11px;
		}

		#artikel{
			font-size: 11px;
		}
	}
</style>