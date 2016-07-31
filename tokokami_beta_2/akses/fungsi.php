<?php

function tambahbarang($merk,$lokasi,$jenis,$ukuran,$harga,$deskripsi){
	

	$query = "INSERT INTO barang(nama_barang, foto_barang, jenis_barang, size, harga_barang, deskripsi_barang) VALUES ('$merk', '$lokasi', '$jenis', '$ukuran', '$harga','$deskripsi')";
	global $link;
	if(mysqli_query($link,$query)){
		return true;
	}else{
		return false;
	}

}

function tambah_artikel($lokasi,$judul,$isi){
	$query = "INSERT INTO blog(foto_profil,judul_post,isi_post) VALUES ('$lokasi','$judul','$isi')";
	global $link;
	if(mysqli_query($link,$query)){
		return true;
	}else{
		return false;
	}
}

function tambah_komentar($id_post,$nama,$komen){
	global $link;

	$query ="INSERT INTO komentar(id_post,nama_pengomentar,isi_komen) VALUES ('$id_post','$nama','$komen')";
	if(mysqli_query($link,$query)){
		return true;
	}else{
		return false;
	}
}



function pilih_produk($nama,$harga){
	global $link;

	$query = "INSERT INTO pilih_produk(nama_pilihan_produk, harga_pilihan_produk) VALUES ('$nama','$harga')";
	if(mysqli_query($link, $query)){
		return true;
	}else{
		return false;
	}
}

function tampil_tabel($jenis){
	global $link;

	$query = "SELECT * FROM barang Where jenis_barang='$jenis'";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;	
}

function tampil_gamis(){
	global $link;

	$query = "SELECT * FROM barang Where jenis_barang='gamis'";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;
}

function tampil_jam_tangan(){
	global $link;

	$query = "SELECT * FROM barang Where jenis_barang='jam tangan'";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;
}

function tampil_jilbab(){
	global $link;

	$query = "SELECT * FROM barang Where jenis_barang='jilbab'";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;
}

function tampil_perkakasrt(){
	global $link;

	$query = "SELECT * FROM barang Where jenis_barang='perkakas rumah tangga'";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;
}

function tampil_jersey(){
	global $link;

	$query = "SELECT * FROM barang Where jenis_barang='jersey'";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;
}

function tampil_lukisan(){
	global $link;

	$query = "SELECT * FROM barang Where jenis_barang='lukisan'";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;
}

function tampil_sepatupria(){
	global $link;

	$query = "SELECT * FROM barang Where jenis_barang='sepatu pria'";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;
}

function tampil_sepatuwnt(){
	global $link;

	$query = "SELECT * FROM barang Where jenis_barang='sepatu wanita'";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;
}

function tampil_alat_olah_raga(){
	global $link;

	$query = "SELECT * FROM barang Where jenis_barang='alat olah raga'";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;
}

function tampil_boneka(){
	global $link;

	$query = "SELECT * FROM barang Where jenis_barang='boneka'";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;
}

function tampil_fashionpria(){
	global $link;

	$query = "SELECT * FROM barang Where jenis_barang='fashion pria'";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;
}

function tampil_fashionanak(){
	global $link;

	$query = "SELECT * FROM barang Where jenis_barang='fashion anak'";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;
}

function tampil_fashionwanita(){
	global $link;

	$query = "SELECT * FROM barang Where jenis_barang='fashion wanita'";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;
}

function tampil_alat_komputer(){
	global $link;

	$query = "SELECT * FROM barang Where jenis_barang='peralatan komputer'";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;
}

function tampil_blog(){
	global $link;

	$query = "SELECT * FROM blog";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;	
}

function tampil_blog_per_id($id){
	global $link;

	$query = "SELECT * FROM blog WHERE id_post='$id'";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data');
	return $result;
}

function tampil_komentar(){
	global $link;

	$query ="SELECT * FROM blog INNER JOIN komentar ON blog.id_post = komentar.id_post";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data');
	return $result;
}

function tampil_komentar_per_id($id){
	global $link;

	$query = "SELECT * FROM komentar WHERE id_post='$id' ORDER BY id_komen DESC";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data');
	return $result;
}

function tampilblog_per_id($id){
	global $link;

	$query = "SELECT * FROM blog WHERE id_post='$id'";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data');
	return $result;
}


function tampil_pilihan_produk(){
	global $link;

	$query = "SELECT * FROM pilih_produk Where id_pilihan";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;
}

function tampil_data_pembeli(){
	global $link;

	$query = "SELECT * FROM data_pembeli";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data pembeli');
	return $result;
}

function tampilperhalaman_gamis(){
	global $link;

	$perhalaman =3;
	$halaman = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
	$start = ($halaman > 1) ? ($halaman * $perhalaman) -$perhalaman:0;
	$query = "SELECT * FROM barang Where jenis_barang='gamis' ORDER BY id_barang DESC LIMIT $start, $perhalaman";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;
}

function tampilperhalaman_fashionpria(){
	global $link;

	$perhalaman =3;
	$halaman = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
	$start = ($halaman > 1) ? ($halaman * $perhalaman) -$perhalaman:0;
	$query = "SELECT * FROM barang Where jenis_barang='fashion pria' ORDER BY id_barang DESC LIMIT $start, $perhalaman";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;
}

function tampilperhalaman_jersey(){
	global $link;

	$perhalaman =3;
	$halaman = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
	$start = ($halaman > 1) ? ($halaman * $perhalaman) -$perhalaman:0;
	$query = "SELECT * FROM barang Where jenis_barang='jersey' ORDER BY id_barang DESC LIMIT $start, $perhalaman";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;
}

function tampilperhalaman_boneka(){
	global $link;

	$perhalaman =3;
	$halaman = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
	$start = ($halaman > 1) ? ($halaman * $perhalaman) -$perhalaman:0;
	$query = "SELECT * FROM barang Where jenis_barang='boneka' ORDER BY id_barang DESC LIMIT $start, $perhalaman";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;
}

function tampilperhalaman_jilbab(){
	global $link;

	$perhalaman =3;
	$halaman = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
	$start = ($halaman > 1) ? ($halaman * $perhalaman) -$perhalaman:0;
	$query = "SELECT * FROM barang Where jenis_barang='jilbab' ORDER BY id_barang DESC LIMIT $start, $perhalaman";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;
}

function tampilperhalaman_jam(){
	global $link;

	$perhalaman =3;
	$halaman = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
	$start = ($halaman > 1) ? ($halaman * $perhalaman) -$perhalaman:0;
	$query = "SELECT * FROM barang Where jenis_barang='jam tangan' ORDER BY id_barang DESC LIMIT $start, $perhalaman";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;
}

function tampilperhalaman_sepatuwnt(){
	global $link;

	$perhalaman =3;
	$halaman = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
	$start = ($halaman > 1) ? ($halaman * $perhalaman) -$perhalaman:0;
	$query = "SELECT * FROM barang Where jenis_barang='sepatu wanita' ORDER BY id_barang DESC LIMIT $start, $perhalaman";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;
}

function tampilperhalaman_sepatupr(){
	global $link;

	$perhalaman =3;
	$halaman = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
	$start = ($halaman > 1) ? ($halaman * $perhalaman) -$perhalaman:0;
	$query = "SELECT * FROM barang Where jenis_barang='sepatu pria' ORDER BY id_barang DESC LIMIT $start, $perhalaman";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;
}

function tampilbarang_per_id($id){
	global $link;

	$query = "SELECT id_barang,nama_barang,foto_barang,jenis_barang,harga_barang, deskripsi_barang FROM barang WHERE id_barang='$id'";
	$result = mysqli_query($link,$query) or die ('Gagal menampilkan data barang');
	return $result;
}

function tampiljenisbarang(){
	global $link;

	$query ="SELECT jenis_barang FROM barang";
	$result =mysqli_query($link,$query) or die('Gagal');
	return $result;
}

function tampil_post_blog(){
	global $link;

	$query ="SELECT * FROM blog";
	$result =mysqli_query($link,$query) or die('Gagal');
	return $result;
}

function tambah_pembelian($nama_barang,$size,$kaki,$harga,$nama_pembeli,$email_pembeli,$tlp_pembeli,$alamat_pembeli,$pos){
	global $link;

	$query = "INSERT INTO data_pembeli(nama_barang, size, ukuran_kaki, harga, nama_pembeli, email_pembeli, tlp_pembeli, alamat_pembeli, pos) VALUES ('$nama_barang','$size','$kaki','$harga','$nama_pembeli','$email_pembeli','$tlp_pembeli','$alamat_pembeli','$pos')";
	if (mysqli_query($link, $query)){
		return true;
	}else{
		return false;
	}
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

function update_databarang($merk,$lokasi,$jenis,$harga,$id){
	global $link;

	$query ="UPDATE barang SET nama_barang='$merk', foto_barang='$lokasi', jenis_barang='$jenis', harga_barang='$harga' WHERE id_barang='$id'";
	return run($query);
}

function update_blog($lokasi, $judul, $isi, $id){
	global $link;

	$query ="UPDATE blog SET foto_profil='$lokasi', judul_post='$judul', isi_post='$isi' WHERE id_post='$id'";
	return run($query);
}

function hapus_data_barang($id){
	global $link;

	$query = "DELETE FROM barang WHERE id_barang='$id' ";
	return run($query);
}

function hapus_artikel($id){
	global $link;

	$query = "DELETE FROM blog WHERE id_post='$id' ";
	return run($query);
}

function hapus_data_pembeli($id){
	global $link;

	$query = "DELETE FROM data_pembeli WHERE id_pembeli='$id' ";
	return run($query);
}

function run($query){
	global $link;

	if(mysqli_query($link,$query)) return true;
	else return false;
}

function excerpt($string){
	$string = substr($string, 0, 250);
	return $string . " <b>. . . </b>";
}

