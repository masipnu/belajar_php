<?php 
// Contoh penggunaan nowdoc
// variable dan karakter khusus tidak akan diproses seperti pada single quote

$method = "nowdoc";
echo <<<'TEKS1'
Kita saat ini mencoba penulisan teks pada php <br>
dengan menggunakan fitur $method penggunaan ' ataupun " tidak
perlu menggunakan backslash
TEKS1;
 ?>