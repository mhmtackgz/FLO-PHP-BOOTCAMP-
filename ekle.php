<?php

/*$adsoyad = $_POST["adsoyad"];
$telefonno = $_POST["telefonno"];
{
$baglan = mysqli_connect("localhost","root","12345678","rehber");
if(!$baglan){
    die("Veri Tabanı Bağlantısı Başarısız: " . mysqli_connect_error());
}

$ekle = "INSERT INTO rehberbl (adsoyad,telefonno) VALUES ('".$adsoyad."','".$telefonno."')";
if ($baglan->query($ekle) === TRUE)
{

echo"VERİ TABANINA VERİ EKLENDİ"."<br>";
header("Refresh: 3; url=form.php");
die('3 saniye sonra yönlendirileceksiniz. Beklemek için
<a href="form.php">Tıklayın.</a>');
}
}
*/
$baglanti = new PDO("mysql:host=localhost;dbname=rehber","root","12345678");
$baglanti->exec("SET NAMES utf8");
$baglanti->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

if(isset($_POST))
{
    $adsoyad  = $_POST['adsoyad'];
    $telefonno = $_POST['telefonno'];
}
if(!$adsoyad || !$telefonno){

    echo 
    "<script>
    alert('AD YA DA TELEFON BOŞ GEÇİLEMEZ!');
    </script>";
    header("Refresh: 5; url=form.php");
    die('5 saniye sonra yönlendirileceksiniz. <a href="form.php">Anasayfaya Beklemeden Dönmek İçin Tıkla!</a>');


}
else{
    $ekle= $baglanti->prepare('INSERT INTO rehberbl SET 
    adsoyad = ?,
    telefonno= ?
');
$ekleme = $ekle->execute(array($adsoyad,$telefonno));

if($ekleme){
    echo"VERİ TABANINA VERİ EKLENDİ"."<br>";
    header("Refresh: 3; url=form.php");
    die('3 saniye sonra yönlendirileceksiniz. Beklememek için
    <a href="form.php">Tıklayın.</a>');
}
else{
    echo"BAŞARISIZ";
}
}

?>