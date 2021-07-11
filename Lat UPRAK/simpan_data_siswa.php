<?php
include('koneksi.php');

if(isset($_POST['kirim']))
	{
	$Nama			= $_POST['Nama'];
	$Alamat			= $_POST['Alamat'];
	$Kota			= $_POST['Kota'];
	$Telp			= $_POST['Telp'];
	$Jenis_Kelamin	= $_POST['Jenis_Kelamin'];
	$Hobby			= $_POST['Hobby'];
	$Agama			= $_POST['Agama'];
	$Asal_Sekolah	= $_POST['Asal_Sekolah'];
	$Jurusan		= $_POST['Jurusan'];
	
	$sql	= "INSERT INTO data_a5 (Nama,Alamat,Kota,Telp,Jenis_Kelamin,Hobby,Agama,Asal_Sekolah,Jurusan)
	values ('$Nama','$Alamat','$Kota','$Telp','$Jenis_Kelamin','$Hobby','$Agama','$Asal_Sekolah','$Jurusan')";
	
	$query	= mysqli_query($db_link,$sql);
	
	echo "sql = $sql; <br>
		query = $query <br>";
	echo "<a href='input_data_siswa.html'>Kembali ke input</a>";
	}
	

?> 