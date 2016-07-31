<?php
include "akses.php";
$gambar=$_POST['gambar'];
if(isset($_POST['submit'])){

$time	= time();
$nama	= $_FILES['gambar']['name'];
$ukuran	= $_FILES['gambar']['size'];
$error	= $_FILES['gambar']['error'];
$asal	= $_FILES['gambar']['tmp_name'];

$format=pathinfo($nama,PATHINFO_EXTENSION);
$query="INSERT INTO barang(gambar) VALUES ('$gambar')";
	if(mysqli_query($link,$query) or die("Tambah data dagal, Id barang telah digunakan")){
		return true;
	}else{
		return false;
	}



if($error===0)
{
	if($ukuran<500000)
	{
		if($format==="jpg")
		{
			
			echo "Berhasil Upload". $ukuran;
			move_uploaded_file($asal,"gambar/" .$nama);
		}else{
			echo "harus jpg";
			}
		}else
			{
			echo "file kegedean";
			}
		}
			else
			{
			mysql_error();
			
	}

}

?>

<form action="insert.php" method="post" enctype="multipart/form-data">
	
<input type="file" name="gambar">
<input type="submit" name="submit" value="Upload">
</form>