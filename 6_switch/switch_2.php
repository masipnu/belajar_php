<?php 
// Penggunaan Switch Alternatif
// Menggunakan nilai "Default"
// Mengosongkan statement sebuah case, akan menjadikan case tersebut
// mengikuti statement case berikutnya
// ========================================

$nilai = "F";

switch ($nilai)
{
	case 'A':
		echo "Sangat Baik";
		break;
	case 'B':
	case 'C':
		echo "Kurang";
		break;
	case 'D':
	case 'E':
		echo "Sangat Kurang";
		break;
	default:
		echo "Tidak Lulus";
		break;
}
 ?>