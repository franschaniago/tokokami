<?php

if ($link = mysqli_connect('localhost','root','','tokokami_full')){
	return true;
}else{
	return false;
}

?>