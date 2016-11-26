<?php
$id = $_POST["id"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$email = $_POST["email"];

if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $id)){
	echo "Invalid id<br>";}
if (strlen($nama) == 0)
	echo "Silahkan masukkan nama anda<br>";
if ((trim($alamat) == '') || ($umur < 0) ||
(ereg('[^0-9]', $alamat)))
	echo "Silahkan masukkan alamat anda<br>";
if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
	echo "Invalid email<br>";
}
?>
