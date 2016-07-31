<?php include "akses.php";
$result=tampil();

if (isset($_POST['upload'])){
	if(updatedata($_POST['gambar'], $_POST['nama'], $_POST['harga'])){
			header('location:index.php');
	}else{
		echo "Update data gagal";
	}
}
?>

<?php
while ($row=mysqli_fetch_assoc($result)) { ?>
<form action="" method="post">
<?php echo '<img width:"100px" height="100px" src="data:image/jpeg;base64,'.base64_encode($row['gambar']).'"/>';?><br>
<input type="file" name="upload"><br>
nama barang :<input type="text" name="nama" value="<?php echo $row['nama'];?>"><br>
harga barang :<input type="text" name="nama" value="<?php echo $row['harga'];?>"><br>

<?php } //end while ?> 
<input type="submit" name="upload" value="upload">
</form>

