<?php 
// Alternatif penulisan ELSEIF
/*==============================
if(expression1):
	statement1;
	statement2;
elseif(expression2):
	statement1;
	statement2;
endif
==============================*/

$ujian = 80;
$tugas = 70;

if ($ujian>=80 && $tugas>=70):
	echo "nilai A";
elseif ($ujian>=70 && $tugas>=60):
	echo "niai B";
elseif ($ujian>=60 && $tugas>=50):
	echo "nilai C";
elseif ($ujian>=40 && $tugas>=30):
	echo "nilai D";
else:
	echo "nilai E";
endif
 ?>