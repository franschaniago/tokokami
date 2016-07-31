<?php 
include 'head.php';


$result = tampil_blog();

while ($a=mysqli_fetch_assoc($result)) {?>
<br>
<form action="" method="post">

			<div id="foto"><img width="80" height="80" src="img/<?php echo $a['foto_profil'];?>"></div>

			<div id="judul">
				<b><a href="blog_single.php?id=<?= $a['id_post'];?>">
				<?php echo $a['judul_post'];?></a></b>
			</div><br>

			<div id="isi"> <?php echo excerpt($a['isi_post']);?></div><br>

</form>

<?php } ?>


<?php 
include 'foot.php';
?>

<style type="text/css">

	#judul a{
		font-size: 1em;
		color: black;
		padding-left: 5px;
		text-decoration: none;
	}

	.artikel{
		font-style: italic;
		border:0px;
	}

	b{
		font-size: 1.5em;
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

	@media screen and (max-width: 480px){

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
	}
</style>