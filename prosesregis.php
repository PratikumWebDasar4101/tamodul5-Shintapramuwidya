<?php
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$jenis_kelamin=$_POST['jk'];
$prodi=$_POST['ps'];
$fakultas=$_POST['fakultas'];
$hobi=$_POST['hobi'];
$hobi = array($_POST['hobi']);
foreach ($_POST['hobi'] as $hobi) {
	}
$komen=$_POST['komen'];
$jumlah= count(explode(" ", $komen));


echo "<h1> HASIL INPUTAN </h1>";
echo "NIM: $nim <br /> Nama: $nama <br /> Email: $email <br /> Jenis Kelamin: $jenis_kelamin <br /> Program Studi: $prodi <br /> Fakultas: $fakultas <br /> Hobi: $hobi <br /> Komentar: $komen <br /> Jumlah Kata: $jumlah <br />";

if ($jumlah < 5) {
	echo "<br><br>kurang atuh";
}
else
{
die("<br><br>$komen");
}
$file = $_FILES["dokumen"];
$nama_file = $file["name"];
$nama_tmp = $file["tmp_name"];
$upload_dir = "upload/";
move_uploaded_file($nama_tmp, $upload_dir.$nama_file);
echo "file berhasil diunggah";

?>
<img src="upload/<?php echo $nama_file; ?>">
