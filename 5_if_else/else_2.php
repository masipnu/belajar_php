<?php 
// Alternatif penulisan ELSE
/*===========================
if(expression):
	statement1;
	statement2
else:
	statement1;
	statement2;
endif;
============================*/

$username = 'admin';
$username1 = 'user';

if ($username=='admin'):
	echo "Selamat datang admin\n\n";
else:
	echo "Maaf, anda tidak memiliki hak akses\n";
endif;

if ($username1=='admin'):
	echo "Maaf, anda tidak memiliki hak akses\n";
else:
	echo "Selamat datang admin\n";
	echo "Baris ini akan dijalankan, karena kondisi terpenuhi";
endif;

 ?>