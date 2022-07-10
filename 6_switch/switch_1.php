<?php 
// Penggunaan SWITCH
// Dalam switch menggunakan kalusa break,
// agar jika suatu kondisi sudah terpenuhi
// maka tidak akan melanjutkan kepada kondisi di bawahnya
/*==================================
switch($var)
{
	case value1:
	statement1;
	break;
	case value2:
	statement2;
	break;
}
==================================*/

$nilai = "B";

switch ($nilai)
{
	case 'A':
		echo "Sangat Baik";
		break;
	case 'B':
		echo "Baik";
		break;
	case 'C':
		echo "Kurang";
		break;
	case 'D':
		echo "Sangat Kurang";
		break;
	case 'E':
		echo "Tidak Lulus";
		break;
}
 ?>