<?php 


function undebug($metin='')
{
$metin=htmlspecialchars($metin);
}
undebug($urunadgetir = $_POST["urunad"]);
undebug($urunfıyat = $_POST["fiyat"]);
echo "$urunadgetir - $urunfıyat\n";
if ($urunadgetir== "" ||  $urunfıyat=="" ) {
echo "<script>
alert('Ürün Ad veya Fiyat Hatalı !');
window.top.location='odev2.php';
</script>";
die();
}
$dosya = fopen("urunler.txt","abt");
fwrite($dosya,"$urunadgetir*$urunfıyat|\n");
fclose($dosya);
?>