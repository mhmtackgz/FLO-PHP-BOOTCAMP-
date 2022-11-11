
<?php

$ürünler = array( 
"ürünad1"=>"Ülker Çikolatalı Gofret 40 gr." , "ürünfiyat1" =>10,
"ürünad2"=>"Eti Damak Kare Çikolata 60 gr.", "ürünfiyat2"=>20,
"ürünad3"=>"Nestle Bitter Çikolata 50 gr.","ürünfiyat3"=>20
);

foreach ($ürünler as $key =>$value){
    echo $key;
    $dosya=fopen("ürünler.txt","abt");
    fclose($dosya);
}


$dosya = fopen("ürünler.txt","rb");
while(!feof($dosya)){
$ürünler[]= fgets($dosya);
}
fclose($dosya);
echo "<table border='1'>
    <tr>
        <td>Ürün Adı </td>
        <td>$key</td>
        <td>Adet</td>
        </tr>";
    
foreach($ürünler as $ürün )
{
    $veri=explode("",$ürün);
    $sayac++;
    echo "<tr>
    <td>$ </td>
    <td>y</td>
    <td>$sayac</td>
    </tr>";

}
echo "</table>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>

    
</body>
</html>