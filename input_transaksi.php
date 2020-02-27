<?php
include("koneksi.php");//Fungsi untuk menggabungkan file
if(isset($_POST['simpan'])){
	$query_t_transaksi="insert into t_transaksi(id_transaksi,nama_transaksi,tgl_transaksi,harga,qty,id_barang)
	values('".$_POST['id_transaksi']."',
	       '".$_POST['nama_transaksi']."',
		   '".$_POST['tgl_tansaksi']."',
		   '".$_POST['harga']."',
		   '".$_POST['qty']."',
		   '".$_POST['id_barang']."')";
		   
	$proses_transaksi=mysql_query($query_t_transaksi);
if($proses_barang){
	echo 'input transaksi berhasil';
}else{
	echo mysql_error();
}
}
?>
<body bgcolor="FFC0CB">
	<h2 align="center" UAS Pemograman3</h2>
	
<form method="POST" action=""> <!---Form untuk kirim data ke DB-->
<table border="1" <!--name harus sama dengan database-->
	<tr>
		<td>Id Transaksi</td>
		<td><Input name="id_transaksi" type="number"></td>
	</tr>
	<tr>
		<td>Nama Transaksi</td>
		<td><Input name="nama_transaksi" type="text"></td>
	</tr>
	<tr>
		<td>Tanggal Transaksi</td>
		<td><Input name="tgl_transaksi" type="date"></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><Input name="harga" type="number"></td>
	</tr>
	<tr>
		<td>Qty</td>
		<td><Input name="qty" type="number"></td>
	</tr>
	<tr>
		<td>Id Barang</td>
		<td><Input name="id_barang" type="number"></td>
	</tr>
	<tr>
		<td><Input name="simpan" type="submit"></td>
	</tr>
</table>
</form>