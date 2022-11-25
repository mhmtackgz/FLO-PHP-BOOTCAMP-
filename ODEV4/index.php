<?php
include("baglanti.php");
//include("tckontrol.php");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="tasarim.css">
</head>
<div class="div">
<body style="text-align:center;">
<form action="ekle.php" method="POST">
    <th>
       <b> <p class="paragraf">Adı Soyadı:<p></b>
        <input class="textboxcolor" type="text" name="adsoyad"><br/>
        <b><p class="paragraf">Tckimlik Numarası:<p></b>
        <input  class = "textboxcolor"type="text"  name="tckimlik"><br/><br>
        <button class="button"<a href="index.php" style="text-decoration: none;">Doğrula ve Kaydet</a></button>
       
    </th>

<button class="button"><a href="listele.php" style="text-decoration:none;">Kayıtları Listele</a></button>
</div>
</form>
</body>
</html>