<?php

include '../akses/akses.php';

if(isset($_GET['id'])){
	if(hapus_artikel($_GET['id'])){
		header('location:admin_post_blog.php');
	}else echo "gagal menghapus data";
}

?>