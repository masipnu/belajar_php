<?php 

$x = 1;
$y = 2;

if ($x==1) {
	echo "baris program ini akan dijalankan \n\n";
}

if ($x==2) {
	echo "baris program ini tidak akan dijalankan\n";
}

if ($y==1) {
	echo "baris program ini tidak akan dijalankan\n";
	echo "karena kondisi tidak terpenuhi \n";
}

if ($y==2) {
	echo "baris program ini akan dijalankan \n";
	echo "karena kondisi terpenuhi \n";
}

 ?>