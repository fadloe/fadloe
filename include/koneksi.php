<?php
//host yang digunakan
//99,9% tidak perlu dirubah
$host = 'localhost'; 
 
//username untuk login ke host
//biasanya didapatkan pada email konfirmasi order hosting
$user = 'root'; 
 
//jika menggunakan PC sendiri sebagai host,
//secara default password dikosongkan
$pass = 'root';
 
//isikan nama database sesuai database
//yang dibuat pada langkah-1
$dbname ='roby';
 
//mengubung ke host
$connect = mysql_connect($host, $user, $pass);
 
//memilih database yang akan digunakan
$dbselect = mysql_select_db($dbname);

if ($connect) {
	$dbselect;
}else{
	echo "koneksi gagal";
}

?>
