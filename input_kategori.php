<?php
include("koneksi.php");//Fungsi untuk menggabungkan file
if(isset($_POST['simpan'])){
	$query_t_kategori="insert into t_kategori(id_kategori,nama_kategori)
	values('".$_POST['id_barang']."',
		   '".$_POST['nama_kategori']."')";
	$proses_kategori=mysql_query($query_t_kategori);
if($proses_kategori){
	echo 'input kategori berhasil';
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
		<td>Id Kategori</td>
		<td><Input name="id_kategori" type="number"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><Input name="nama" type="text"></td>
	</tr>
	<tr>
		<td><Input name="simpan" type="submit"></td>
	</tr>
</table>
</form>