<?php

include '../akses/akses.php';

if(isset($_GET['id'])){
	if(hapus_data_pembeli($_GET['id'])){
		header('location:admin_data_pembeli.php');
	}else echo "gagal menghapus data";
}

?>