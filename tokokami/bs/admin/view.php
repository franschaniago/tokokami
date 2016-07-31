<?php 
include "akses.php" ;
$result=tampil();
?>

<div id="head">
	<center><h2>Halaman Admin</h2></center>
</div>

<div id="laporan">
<form>
<SCRIPT language=JavaScript src="almanak.js"></SCRIPT> 

	<table width="50%" border="1" align="center" cellspacing="0"> 

		<tr bgcolor="gray">
			<td>No</td>
			<td>Nama</td>
			<td>Gambar</td>
			<td>Harga</td>
			<td>Akses</td>
		</tr>

<?php $no=1; 
while ($row=mysqli_fetch_assoc($result)) { ?>

		<tr>
			<td> <?php echo $row['id'];?> </td>
			<td> <?php echo $row['nama'];?> </td>
			<td> <?php echo '<img width:"100px" height="100px" src="data:image/jpeg;base64,'.base64_encode($row['gambar']).'"/>';?> </td>
			<td> <?php echo $row['harga'];?> </td>
			<td bgcolor="cyan"><a href="update.php?id= <?php echo $row['id']; ?>">Update Data</a></td>
		</tr>

		<?php $no++;?>
	
	<?php } //end while ?> 
</table>
</form>
</div>

<style type="text/css">
	body{
		font-family:sans-serif;
	}
	a{
		text-decoration: none;
		font-size: 15px;
		text-align: center;
	}

	a:hover{
		color: white;
	}
</style>