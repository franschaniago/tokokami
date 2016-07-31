<?php

function login_admin($user,$pass){
	global $link;

	$sql 	= "SELECT * FROM user WHERE user='$user' AND password='$pass'";
	if($result =mysqli_query($link, $sql)){
		if(mysqli_num_rows($result)!=0) return true;
		else return false;
	}
}

?>