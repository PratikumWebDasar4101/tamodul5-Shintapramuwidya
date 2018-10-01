<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<form action="input.php" method="Post" enctype="multipart/form-data">

			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="number"  maxlength="10" name="nim"></td>
			</tr>

			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" maxlength="25" name="nama"></td>
			</tr>

			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="email"></td>
			</tr>

			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="jk" value="L">Laki-Laki</td>
				<td><input type="radio" name="jk" value="P">Perempuan</td>
			</tr>

			<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td><select name="ps">
					<option value="MI">MI</option>
					<option value="KA">KA</option>
					<option value="TK">TK</option>
					<option value="PH">PH</option>
					<option value="IF">IF</option>
	
				</select></br></td>
			</tr>

			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td><select name="fakultas">
					<option value="FIK">FIK</option>
					<option value="FIT">FIT</option>
					<option value="FEB">FEB</option>
					<option value="FKB">FKB</option>
				</select></br></td>
			</tr>

			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td><input type="checkbox" name="hobi[]" value="baca"> baca<br> </td>
				<td><input type="checkbox" name="hobi[]" value="jalan"> jalan<br> </td>
				<td><input type="checkbox" name="hobi[]" value="tidur"> tidur<br> </td>
			</tr>

			<tr>
				<td>Komentar</td>
				<td>:</td>
				<td><input type="textarea" name="komen"></td>
			</tr>

			<tr>
				<td>Upload Foto</td>
				<td>:</td>
				<td><td colspan="2"><input type="file" name="dokumen" id="dokumen"/><br></td>
				<td><input type="submit" name="Upload" id="Upload"
					value="Upload/"><br></td>
			</tr>

		</form>
	</table>
</body>
</html>
