<?php
include('koneksitambah.php');

if(isset($_POST['tambahdata']))
	{
	$nis	= $_POST['nis'];
	$nama	= $_POST['nama'];

	
$sql	= "insert into datatambahan (nis,nama)
values ('$nis','$nama')";
	
$query	= mysqli_query($db_link,$sql);
	echo "sql = $sql;<br>
		 query = $query <br>";
	echo "<a href="formtambah.html"></a>";
	}
?>
	
else
if(isset($_POST['tedit']))
	{
	$nis	= $_POST['NIS'];
	$nama	= $_POST['Nama'];
	$alamat	= $_POST['Alamat'];
	$kelas	= $_POST['Kelas'];
	//Jika data sama dan ada perubahan maka simpan perubahan data tsb, kecuali nis tetap
	$sql	= 'update siswa set nama ="'.$nama.'", alamat = "'.$alamat.'", kelas = "'.$kelas.'" where nis ="'.$nis.'"';
	
	$query	= mysqli_query($db_link,$sql);
	echo "Sql = $sql;<br>
		 Query = $query <br>";
	}

?> 