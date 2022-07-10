<?php 
// Contoh penggunaan HEREDOC
// variable dan karakter khusus akan diproses seperti pada single quote

$method = "heredoc";
echo <<<TEKS1
Kita saat ini mencoba penulisan teks pada php <br>
dengan menggunakan fitur $method penggunaan 'ataupun " tidak
perlu menggunakan backslash
TEKS1;
 ?>