<?php
include("db.php");
$kadi = strip_tags($_POST["kadi"]);
$sifre = strip_tags($_POST["sifre"]); 
?>
<html>
<link rel="stylesheet" type="text/css" href="tasarim.css">
<body style="background-color:#E6E6FA">
<form action="" method="post">
    <div id="banner";>
     <marquee style="font-size:x-large; color:orange ; ;">ADMİN PANELİ GİRİŞ EKRANI </marquee>
    </div>
<div class="formtasarim">
    <table align="center">
<tr>
<td style="font-size: x-large;color:orange;">Kullanıcı Adı:</td>
<td><input type="text" name="kadi" /></td>
</tr>
<tr>
<td style="font-size: x-large;color:orange">Şifre:</td>
<td style="font-size:x-large;color:orange ;"><input  type="password" name="sifre" /></td>
</tr>
<tr>
<td></td>
<td><input class="button" type="submit" value="Giriş" /></td>
</tr>
</table>
</div>
<div style="background-color:#E6E6FA ;">
<?php 
if($kadi || $sifre){
    $cek = $db->query("SELECT * FROM  kullanıcılar where kullanici_adi = '$kadi' && kullanici_sifre = '$sifre' ",PDO::FETCH_ASSOC);
if($cek->rowCount()){
    echo'<h3 align="center"; style="color:green";>Admin Paneline Hoşgeldiniz Sayın:'.$kadi;
header("Refresh:3; url=adminpanelgiris.php");

}
else{   
    echo'<h3 align="center"; style="color:red"; >Kullanıcı Adı veya Şifre Hatası!</h3>';
}

}
?>
</div>
</form>
</body>
</html>