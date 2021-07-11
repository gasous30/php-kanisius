<?php
include('koneksi.php');

//Menguji apakah data yang di input masuk ke dalam variabel $nis sampai dengan $kelas

if(isset($_POST['tambah']))
	{
	$nis	= $_POST['nis'];
	$nama	= $_POST['nama'];
	$alamat	= $_POST['alamat'];
	$kelas	= $_POST['kelas'];
	
	$sql	= 'insert into siswa (nis,nama,alamat,kelas)
	values ("'.$nis.'","'.$nama.'","'.$alamat.'","'.$kelas.'")';
	
	$query	= mysqli_query($db_link,$sql);
	echo "Sql = $sql;<br>
		 Query = $query <br>";
	echo "<a href='tambahdata.php'><br>Kembali ke input </a>";
	}
	
else
if(isset($_POST['tedit']))
	{
	$nis	= $_POST['nis'];
	$nama	= $_POST['nama'];
	$alamat	= $_POST['alamat'];
	$kelas	= $_POST['kelas'];
	//Jika data sama dan ada perubahan maka simpan perubahan data tsb, kecuali nis tetap
	$sql	= 'update siswa set nama ="'.$nama.'", alamat = "'.$alamat.'", kelas = "'.$kelas.'" where nis ="'.$nis.'"';
	
	$query	= mysqli_query($db_link,$sql);
	echo "Sql = $sql;<br>
		 Query = $query <br>";
	}

?> 