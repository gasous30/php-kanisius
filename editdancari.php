<?php
include('koneksi.php');
$nis = $_POST['nis']; //cek nis jika sesuai


if(isset($_POST['nis']))
	{
	echo "<br>Nomor induk yang dicari = $nis";
	$query	= mysqli_query($db_link,'select * from siswa where nis = "'.$nis.'"');
	$data	= mysqli_fetch_array($query);
	$nama	= $data['nama'];
	$alamat	= $data['alamat'];
	$kelas	= $data['kelas'];
	echo "<pre>
	<!data	=$data>
	nama	=$nama
	alamat	=$alamat
	kelas	=$kelas
		";
		echo "<Form action=aksi.php method=post>
		Nis		: <input type=text name='nis' value=$nis>
		Nama	: <input type=text name='nama' size=50 value='$nama'> 
		Alamat	: <input type=text name='alamat' size=50 value='$alamat'>
		Kelas	: <input type=text name='kelas' value='$kelas'> 
			<input type=submit name='tedit' value=Edit>
		</form>";
	}
?> 