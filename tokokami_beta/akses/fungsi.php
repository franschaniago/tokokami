<?php


function tambahbarang_kaospria($merk,$lokasi,$jenis,$harga){
	global $link;

	$query = "INSERT INTO barang(nama_barang, foto_barang, jenis_barang, harga_barang) VALUES ('$merk', '$lokasi','$jenis','$harga')";
	if(mysqli_query($link,$query)){
		return true;
	}else{
		return false;
	}

}

function tampilbarang(){
	global $link;

	$query = "SELECT nama_barang,foto_barang,jenis_barang,harga_barang FROM barang";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;
}

function tampiljenisbarang(){
	global $link;

	$query ="SELECT jenis_barang FROM barang";
	$result =mysqli_query($link,$query) or die('Gagal');
	return $result;
}

function tambahemail($email){
	global $link;

	$query = "INSERT INTO newsletter(email) VALUES('$email')";
	if(mysqli_query($link,$query)){
		return true;
	}else{
		return false;
	}
}

function tambahdata_penjual($nama,$alamat,$nomor,$sosmed,$email,$pass,$jenis){
	global $link;

	$query="INSERT INTO data_penjual(nama_penjual,alamat_penjual,nomor_tlp_penjual,akun_sosmed_penjual,email_penjual,password_penjual,jenis_barang) VALUES ('$nama','$alamat','$nomor','$sosmed','$email','$pass','$jenis')";
	if(mysqli_query($link, $query)){
		return true;
	}else{
		return false;
	}
}

