<?php
include("baglanti.php");
if(isset($_POST))
{
    $adsoyad  = $_POST['adsoyad'];
    $tckimlik = $_POST['tckimlik'];
}

if($adsoyad && $tckimlik){
    if(strlen($tckimlik)==11)
    {
        
        if(!$tckimlik[0]==0)
        {
            if(is_numeric($tckimlik)){
                $ekle= $baglanti->prepare('INSERT INTO kisi SET 
                adsoyad = ?,
                tckimlik= ?
            ');
            $ekleme = $ekle->execute(array($adsoyad,$tckimlik));
            if($ekleme){
                echo"VERİ TABANINA VERİ EKLENDİ"."<br>";
                header("Refresh: 3; url=index.php");
                die('3 saniye sonra yönlendirileceksiniz. Beklememek için
                <a href="index.php">Tıklayın.</a>');
               
            }
            }else{
                echo"Tc No Sadece Sayısal Değer Olmalı..!";
               
            }
        }
       else{
        
        echo "TC Kimlik Numarası 0 ile başlamaz...!";
       }   
     }
       else
       {
        echo "Tc Kimlik 11 Hane Olmak Zorunda...!";
       }     
        }

       

else{
    echo 
    "<script>
    alert('AD YA DA TC KİMLİK BOŞ GEÇİLEMEZ!');
    </script>";
    header("Location; url=index.php");
    die('5 saniye sonra yönlendirileceksiniz. 
    <a href="index.php">Anasayfaya Beklemeden Dönmek İçin Tıkla!</a>');    


}

?>