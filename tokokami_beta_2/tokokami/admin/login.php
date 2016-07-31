<?php
session_start();

include '../akses/akses.php';

if(isset($_POST['submit'])){
	$user = $_POST['user'];
	$pass = md5($_POST['pass']);

	if(login_admin($user,$pass)){
		header('location:admin_index.php');
	}else{
		echo "<script>alert('Gagal Login, periksa kembali user dan passwordnya')</script>";
	}
}


?>

<form action="" method="post">
	<table>
		<tr>
			<td>User</td>
			<td><input type="text" name="user" required></td>
		</tr>

		<tr>
			<td>Password</td>
			<td><input type="password" name="pass" required></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Masuk"></td>
		</tr>
	</table>
</form>

<style type="text/css">

	*{
		font-family: sans-serif;
	}
	body{
		background-color: #2196F3;
		color: white;
	}

	table{
		margin: 5px auto;
		margin-top: 200px;
	}
</style>



