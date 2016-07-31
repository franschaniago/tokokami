<?php 
include "akses.php"; 

if (isset($_POST['update'])){
	if(updatedata($_POST['gambar'], $_POST['nama'], $_POST['harga'], ($_GET['id']))){
			header('location:view.php');
	}else{
		echo "Update data gagal";
	}
}
$result=tampil_per_id($_GET['id']);
while ($row=mysqli_fetch_assoc($result)) {

?>

<div id="head">
	<center><h2>Update Data Barang</h2></center>
</div>

<div id="tabel">
<center>Update data dibawah ini</center><br>

<form action="" method="post">
	<table border="0" align="center" style="height:300;">

		<tr>
			<td>Gambar</td>
			<td><?php echo '<img width:"100px" height="100px" src="data:image/jpeg;base64,'.base64_encode($row['gambar']).'"/>';?></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="file" nama="file"></td>
		</tr>

		<tr>
			<td>Nama Barang</td>
			<td><input type="text" name="nama" value="<?php echo $row['nama'];?>"></td>
		</tr>

		<tr>
			<td>Harga</td>
			<td><input type="number" name="harga" value="<?php echo $row['harga'];?>"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="update" value="Update Data" id="tombol"></td>
		</tr>	
	</table>
</form>
<?php } ;?>
</div>
