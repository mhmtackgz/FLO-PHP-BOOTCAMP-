
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="tasarim.css">
</head>
<body>
</body>
</html>
<?php
//include("baglanti.php");

?>
<?php
$baglan = new PDO("mysql:host=localhost;dbname=kisiler","root","12345678");
$baglan->query("set character set utf8");
$baglan->setAttribute(PDO::ATTR_AUTOCOMMIT,PDO::ERRMODE_EXCEPTION);
$sorgu = $baglan->query("SELECT * FROM kisi ORDER BY id");
$toplam=$sorgu->rowCount();

echo "<table class=table width='100%' border='2',>
<tr  align='center'>
<th>Sıra NO </th>
<th>Adı Soyad</th>
<th>TC Kimlik NO </th>
<th>DURUM</th>
";

while($satir = $sorgu->fetchObject()){
    echo
    "<tr class=th align='center'>
    <td>$satir->id</td>
    <td>$satir->adsoyad</td>
    <td>$satir->tckimlik</td>
    <td>
    <a href='tckontrol.php?tckimlik=$satir->tckimlik'>Kontrol Et </a>
    </td>
    </tr>";
    
}
echo "</table>";
echo "<table class=table width='100%' border='2',>
<tr align='center'>
<th>Sistemde Toplam - $toplam - Kayıt Var. </th>

";

?>