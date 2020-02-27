<?php
include("koneksi.php");//Fungsi untuk menggabungkan file
if(isset($_POST['simpan'])){
	$query_t_barang="insert into t_barang(id_barang,nama,kategori_id,satuan_id)
	values('".$_POST['id_barang']."',
	       '".$_POST['nama']."',
		   '".$_POST['kategori_id']."',
		   '".$_POST['satuan_id']."')";
		   
	$proses_data=mysql_query($query_t_barang);
if($proses_data){
	echo 'input barang berhasil';
}else{
	echo 'balik lagi';
}
}
?>
<body bgcolor="FFC0CB">
	<h2 align="center" UAS Pemprograman3</h2>
	
<form method="POST" action=""> <!---Form untuk kirim data ke DB-->
<table border="1" <!--name harus sama dengan database-->
	<tr>
		<td>Id Barang</td>
		<td><Input name="id_barang" type="number"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><Input name="nama" type="text"></td>
	</tr>
	<tr>
		<td>Id Kategori</td>
		<td><Input name="kategori_id" type="number"></td>
	</tr>
	<tr>
		<td>Id Satuan</td>
		<td><Input name="satuan_id" type="number"></td>
	</tr>
	<tr>
		<td><Input name="simpan" type="submit"></td>
	</tr>
</table>
</form>