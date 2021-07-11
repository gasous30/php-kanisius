<?php
include('koneksi.php');
$result	= mysqli_query($db_link, "SELECT * FROM siswa ORDER BY nama DESC");
// tampilkan query dalam bentuk tabel
echo "<table border=1 width=50% align=center>";
echo "<tr bgcolor=grey>
		<td> NIS 
		<td> Nama
		<td> Alamat 
		<td> Kelas </tr>";
while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
{
	echo "<td>".$row['nis']." "."<td>".$row['nama']." "."<td>".$row['alamat']." ";
	echo "<td>".$row['kelas'];
	echo "</tr><tr>";}
?> 