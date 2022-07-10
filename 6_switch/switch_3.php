<?php 
// Penggabungan if, else, elseif, switch
// ======================================

$username = 'adi';
$password = '12345';

if ($username != 'adi' || $password != '12345')
{
	echo "Maaf, username atau password anda salah!\n";
	echo "Silahkan menghubungi bagian tata usaha";
}
else{
	$pembayaran = true;
	$registrasi = true;
	if ($pembayaran==true && $registrasi==true)
	{
		$uts = 60;
		$uas = 75;
		$nilaiakhir = ($uts+$uas)/2;
		if ($nilaiakhir>80)
			$indeks = 'A';
		elseif ($nilaiakhir>70)
			$indeks = 'B';
		elseif ($nilaiakhir>60)
			$indeks = 'C';
		elseif ($nilaiakhir>50)
			$indeks = 'D';
		else
			$indeks = 'E';

		switch ($indeks)
		{
			case 'A':
			case 'B':
			case 'C':
				echo 'Anda Lulus!';
				break;
			case 'D':
				echo 'Sebaiknya anda mengulang!';
				break;
			case 'E':
				echo 'Anda Tidak Lulus!';
		}
	}
	elseif ($pembayaran==true)
	{
		echo 'Untuk mengikuti ujian, anda harus melakukan registrasi terlebih dahulu';
	}
	else
	{
		echo 'Maaf, anda harus menyelesaikan administrasi terlebih dahulu';
	}

}

 ?>
