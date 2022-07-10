<?php 
$nilai = array(
1 => 50,
2 => 60,
3 => 70,
4 => 75);

$mahasiswa =[
"1101" => "Budi",
"1102" => "Ahmad",
"1103" => "Sari",
"1104" => "Agus"];

$nilaimahasiswa = array(
"Budi" => 50,
"Ahmad" => 60,
"Sari" => 70,
"Agus" =>75
);

echo $mahasiswa["1101"].'<br>';
echo $nilai[3].'<br>';
echo $nilaimahasiswa["Budi"].'<br>';
?>