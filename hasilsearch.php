<?php
$kolom=$_POST['kolom'];
$cari=$_POST['cari'];
$conn=mysql_connect("localhost","root","");
mysql_select_db("bukutamu", $conn);
$hasil=mysql_query("select * from bukutamu where
$kolom like '%$cari%'", $conn);
$jumlah=mysql_num_rows($hasil);
echo "<br>";
echo "Ditemukan: $jumlah";
echo "<br>";
while($baris=mysql_fetch_array($hasil))
{
echo "ID       : ";
echo $baris[0];
echo "<br>";
echo "Nama     : ";
echo $baris[1];
echo "<br>";
echo "Email    : ";
echo $baris[2];
echo "<br>";
echo "Komentar :";
echo $baris[3];
echo "<br>";
}

?>
