<?php 
// Penggunaan Operator Logika

/*======================================================================
$x and $y 	| and	| True jika $x dan $y keduanya bernilai true
$x && $y 	| and	| True jika $x dan $y keduanya bernilai true
$x or $y 	| or 	| True jika salah satuatau keduanya bernilai true
$x || $y 	| or 	| True jika salah satuatau keduanya bernilai true
$x xor $y 	| xor	| True jika salah satunya saja bernilai false
! $x 		| not 	| True jika $x bernilai false
=====================================================================*/

$x = true;
$y = false;

echo var_dump($x and $y);	// menghasilkan nilai false
echo var_dump($x or $y);	// menghasilkan nilai true
echo var_dump($x xor $y);	// menghasilkan nilai true
echo var_dump(!$x);			// menghasilkan nilai false

 ?>