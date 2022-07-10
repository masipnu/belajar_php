<?php 
// Alternatif penulisan IF
/*===========================
if(expression):
	statement1;
	statement2;
endif
============================*/

$x = 1;
$y = 2;

if ($x==1) {
	echo "Baris program ini akan dijalankan \n";
}

// Alternatif cara penulisan if

if ($x==1):
	echo "Ini adalah cara alternatif penulisan if";
endif

 ?>