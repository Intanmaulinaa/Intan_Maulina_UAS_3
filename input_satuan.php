<?php
include("koneksi.php");//Fungsi untuk menggabungkan file
if(isset($_POST['simpan'])){
	$query_input_satuan="insert into t_satuan(id_satuan,nama)
	values('".$_POST['id_satuan']."',
	       '".$_POST['nama']."')";
	$proses_satuan=mysql_query($query_input_satuan);
if($proses_satuan){
	echo 'input satuan berhasil';
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
		<td>Id Satuan</td>
		<td><Input name="id_satuan" type="number"></td>
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