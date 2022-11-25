<?php
	$kayitgetir = $_GET["tckimlik"];
	if (strlen($kayitgetir) == 11) 
	{
		if ($kayitgetir[0]== 0 ){
			echo "Kimlik No  Sıfır ile Başlamaz ! ";
		}
		else{
			if (is_numeric($kayitgetir)) 
			{
				$kayitgetir_10 = ((($kayitgetir[0] + $kayitgetir[2] + $kayitgetir[4] + $kayitgetir[6] + $kayitgetir[8])*7) - ($kayitgetir[1] + $kayitgetir[3] + $kayitgetir[5] + $kayitgetir[7])) % 10;
				if ($kayitgetir_10 == $kayitgetir[9]) 
				{
					$kayitgetir_11 = ($kayitgetir[0] + $kayitgetir[1] + $kayitgetir[2] + $kayitgetir[3] + $kayitgetir[4] + $kayitgetir[5] + $kayitgetir[6] + $kayitgetir[7] + $kayitgetir[8] + $kayitgetir[9]) % 10;
					if ($kayitgetir_11 == $kayitgetir[10]) {
						echo "TC Kimlik Numarası Geçerli";
					} else {
						echo " TC Kimlik Numarası GEÇERSİZ!";
					}
				} else {
					echo "Geçerli TC Kimlik Numarası!";
				}
			} else {
				echo "TC Kimlik Numarası yalnızca rakamlardan oluşmaktadır.";
			}
		
		}
	} else {
		echo "TC Kimlik Numarası 11 hane olmak zorundadır.";
	}


	