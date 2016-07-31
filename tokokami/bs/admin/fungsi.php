<?php
function tampil(){
	global $link;

	$query= "SELECT * FROM barang";
	$result= mysqli_query($link, $query) or die(mysql_error($result));
	return $result;
}


function updatedata($gambar, $nama, $harga){
	global $link;

	$query="UPDATE barang SET gambar='$gambar', nama='$nama', harga='$harga'";
	if(mysqli_query($link,$query) or die("Update Data Gagal")){
		return true;
	}else{
		return false;
	}
}



function tampil_per_id($id){
	global $link;

	$query= "SELECT * FROM barang WHERE id=$id";
	$result= mysqli_query($link, $query) or die("Update data Gagal");
	return $result;
}

function tambahdata($nama, $gambar, $harga){
	global $link;

	$query="INSERT INTO barang(nama,gambar,harga)
	VALUES ('$nama', '$gambar', '$harga')";
	if(mysqli_query($link,$query) or die("Tambah data dagal, Id barang telah digunakan")){
		return true;
	}else{
		return false;
	}
}



?>