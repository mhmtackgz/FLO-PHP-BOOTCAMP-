
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>

    <button>
        <a href="form.php">VERİ EKLEME SAYFASINA GİT</a>
        <br>
    </button>
  </div>
</body>
</html>
<?php

$baglan = new PDO("mysql:host=localhost;dbname=rehber","root","12345678");
$baglan->query("set character set utf8");
$baglan->setAttribute(PDO::ATTR_AUTOCOMMIT,PDO::ERRMODE_EXCEPTION);

$sorgu = $baglan->query("SELECT * FROM rehberbl ORDER BY rehberbl.id");
$toplam=$sorgu->rowCount();

echo "<table width='100%' border='2',>
<tr align='center'>
<th>Sıra NO </th>
<th>Adı Soyad</th>
<th>Telefon Numarası</th>
<th>İŞLEM</th>
";

while($satir = $sorgu->fetchObject()){
    echo
    "<tr align='center'>
    <td>$satir->id</td>
    <td>$satir->adsoyad</td>
    <td>$satir->telefonno</td>
    <td> <a href='sil.php?id=$satir->id'>SİL</a></td>
    </tr>";
    
}
echo "</table>";
echo "<table width='100%' border='2',>
<tr align='center'>
<th>Sistemde Toplam - $toplam - Kayıt Var. </th>
";

?>