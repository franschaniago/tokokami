<?php

function tambahdata($nama,$alamat,$emailuser,$subject,$kode,$nomorproduk,$ukuran,$jumlah){

$query="INSERT INTO `pemesanan`(`nama_lengkap`, `alamat`, `email`, `nomor_hp`, `kode_produk`, `nomor_produk`, `ukuran`, `jumbel`) VALUES ('$nama','$alamat','$emailuser','$subject','$kode','$nomorproduk','$ukuran','$jumlah')";
	if(mysql_query($query) or die (mysql_error())){
		return true;
	}else {
		return false;
	}
}


function tampil(){
	$query="select*from pemesanan";
	$result=mysql_query($query) or die("Gagal Tampil");
	return $result;
}


?>