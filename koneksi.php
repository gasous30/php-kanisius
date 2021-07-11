<?php 															//awal penulisan PHP, CASE SENSITIVE
$db_host ='localhost';		
$db_usn = 'root'; 												//nama username
$db_pwd = ''; 													//password, tidak ada = kosongkan
$db_name= 'siswa27'; 											//nama database
$db_link= mysqli_connect($db_host,$db_usn,$db_pwd,$db_name);
if(!$db_link){
echo 'Tidak dapat terhubung ke database';}
else {echo "Koneksi ke database sukses";}

?>																
