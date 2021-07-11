<?php
echo "
<html>
<body>
<center>
<h1> TAMBAH DATA </h1>
<table>
<form method='POST' action='aksi.php'>
	<tr>
		<td> NIS </td>
		<td><input type=text name='nis' size=10></td>
	</tr>
	<tr>
		<td> Nama </td>
		<td><input type=text name='nama' size=50></td>
	</tr>
	<tr>
		<td> Alamat </td>
		<td><input type=text name='alamat' size=60></td>
	</tr>
	<tr>
		<td> Kelas </td>
		<td><select name='kelas'>
			<option>X</option>
			<option>XI</option>
			<option>XII</option></select>
		</td>
	</tr>
	<tr>
		<td><input type=submit value='TAMBAH' name='tambah'></td>
	</tr>
</form>
</table>
</center>
</body>
</html>";
?>