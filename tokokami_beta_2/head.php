<?php

include_once 'akses/akses.php';
?>

<script src="jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="css/bootstrap.min.css" rel="stylesheet">




<div id="head">
	<p>Tokokami</p>
	<input type="search" name="cari" id="cari" class="text" placeholder="Cari Barang">
	<a href="blog.php" id="blogtk">Blog Tokokami</a>
</div>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Menu</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <li><a href="index.php">Beranda</a></li>
        <li><a href="cara_beli.php">Cara pembelian</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kategori <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="fashion_pria.php">Fashion Pria</a></li>
            <li><a href="fashion_wanita.php">Fashion Wanita</a></li>
            <li><a href="fashion_anak.php">Fashion Anak</a></li>
            <li><a href="perkakas_rumah_tangga.php">Alat rumah tangga</a></li>
            <li><a href="jam_tangan.php">Jam Tangan</a></li>
            <li><a href="jilbab.php">Jilbab</a></li>
            <li><a href="gamis.php">Gamis</a></li>
            <li><a href="sepatu_wanita.php">Sepatu Wanita</a></li>
            <li><a href="sepatu_pria.php">Sepatu Pria</a></li>
            <li><a href="jersey.php">Jersey</a></li>
            <li><a href="lukisan.php">Lukisan</a></li>
            <li><a href="alat_olah_raga.php">Alat olah raga</a></li>
            <li><a href="alat_komputer.php">Peralatan Komputer</a></li>
          </ul>
        </li>
        <li><a href="kontak.php">Hubungi Kami</a></li>
      
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<style type="text/css">
	.navbar-default .navbar-nav>li>a {
    color: white;
  }

  .navbar-default .navbar-nav>li>a:hover {
    color: white;
  }

  .navbar-default .navbar-brand {
    color: white;
}

.navbar-default .navbar-brand:hover {
    color: white;
}

.navbar-default {
    border-color: #2C75DC;
}

.navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover {
    background-color: #51A9C1;

}

.navbar-default .navbar-toggle{
	background-color: #51A9C1;

}

.navbar-default .navbar-collapse, .navbar-default .navbar-form {
    border-color:  #2C75DC;
}


.navbar-default .navbar-toggle .icon-bar {
    background-color: #fff;
}

.dropdown-menu {
	background-color: #2C75DC;
	color: white;
	width: 100%;
}

.dropdown-menu>li>a {
	color: white;
}

@media (max-width: 767px){
.navbar-default .navbar-nav .open .dropdown-menu>li>a {
    color: #fff;
	}
}
</style>
<div id="konten">