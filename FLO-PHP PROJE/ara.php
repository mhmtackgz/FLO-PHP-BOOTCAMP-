<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body style="background-color:orange ;">
  


<head><link rel="stylesheet" type="text/css" href="tasarim.css"></head>
<form style='text-align:center; background-color:bisque ; border: 2px solid black;'action="" method="GET">
<label style="background-color:orange; color:black ; font-size:x-large ;margin-bottom:20px ;">Arama Yapmak İçin Değer Yazınız:</label>
<br><input style="font-size: x-large;" type="text" name="kelime">
<br><br>

<input style="background-color:black; color:orange; font-size: larger;" type="submit" value="Arama Yap">
<div>
<br>
<button style=
"background-color: black; color:orange ;">
<a style="margin-top:10px ; text-decoration:none; color:orange ; font-size: larger;
" href='adminpanelgiris.php'>Admin Anasayfa</a></button>
</div>
</form>

<hr>
<?php
include("db.php");
if($_GET){
    $kelime = $_GET['kelime'];
}

if(!$kelime){
 echo "<script>
 alert.('Arama Alanını Boş Geçtiniz!')

  
  </script>";

    
}else{
 $sorgu=$db->prepare("SELECT * FROM url WHERE url LIKE :url");
 $sorgu->execute(array(':url'=>'%'.$kelime.'%'));
 if($sorgu->rowCount()){
  foreach($sorgu as $satir){
    echo "<b>$kelime </b>:"."Kelimesine Ait(".$sorgu->rowCount().") adet sonuç bulundu"."<br>";
    echo "<b>Bulunan Verilerin Sıra Numaraları </b>:". $satir['id']."<br>";
    echo "<b>Kısaltılmış URL Linkleri </b>:"."www.kısa.url-".$satir['shorturl']."<br>";
    echo "<b>İlk Girilmiş URL Linkleri</b> :".$satir['url']."<br>";
    echo"<hr color='black'>";
  }
 }
 else{
    echo "Veritabanında Aradığınız Kelime Yok!";

 }
}
?>
</body>