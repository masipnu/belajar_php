<?php 
// Menggunakan ELSE

$username = 'admin';
$username1 = 'user';

if ($username=='admin')
	echo "Selamat datang admin \n\n";
else
	echo "maaf, anda tidak memiliki hak akses";

if ($username1=='admin')
	{
		echo "Selamat datang admin";
		echo "baris program ini dijalankan karena expression bernilai true";
	}
else
	{
		echo "Maaf, anda tidak memiliki hak akses\n";
		echo "Baris program ini akan dijalankan";
	}

 ?>