<?php

include '../akses/akses.php';

if(isset($_GET['id'])){
	if(hapus_data_barang($_GET['id'])){
		header('location:admin_data_barang.php');
	}else echo "gagal menghapus data";
}

?>