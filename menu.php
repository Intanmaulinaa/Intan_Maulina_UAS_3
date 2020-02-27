<?php
include('koneksi.php');
?>
<body bgcolor="#FFC0CB">
	<h2 align="center">HALAMAN UTAMA DATABASE UAS PEMPOGRAMAN 3 </h2>
	<form method="post" action=""><!--Form untuk dirim data ke DB-->
	<table border="1" align="center"><!--Nama harus sama dengan database-->
	<ul>
		<li><a href="input_barang.php">Master Barang</a></li>
		<li><a href="input_satuan.php">Master Satuan</a></li>
		<li><a href="input_kategori.php">Master Kategori</a></li>
		<li><a href="input_transaksi.php">Master transaksi</a></li>
		<li><a href="tampil_barang.php">Tampil Barang</a></li>
		<li><a href="tampil_satuan.php">Tampil Satuan</a></li>
		<li><a href="tampil_kategori.php">Tampil Kategori</a></li>
		<li><a href="tampil_transaksi.php">Tampil Transaksi</a></li>
		<li><a href="laporan_transaksi.php">Laporan Transaksi Barang Per Kategory</a></li>
	</ul>
</div>