
<body  style="text-align:center ; background-color: beige;">
<form style=" border:2px solid; " action="" method="POST">
    <h3 style="text-decoration: dotted; border: solid 2px orange; color:red;">LİNK KISALTMA PROGRAMI </h3>
    <div name="id"style="background-color:white;">
    <label><b>Kısaltılacak URL:</b></label> 
    <input type="text" name="url" style="border-radius: 50px;">
    <br>
    <hr color="black">
    <input style="border-radius: 50px; background-color:red;color:black " type="submit" value="Linki Kısalt">
    <hr color="black" style="text-align:center;">
    </div>
    <div><center><button style="background-color: red; border-radius:30px;" ><a style="text-decoration: none; color: black; " href='adminlogin.php'>Admin Paneline Giriş </a></button></center></div>
</form>
<div id="mydiv">

</div>
</body>
<meta charset="utf-8">
<?php
include("db.php");
if($_POST) 
{
$url =  strip_tags($_POST['url']); //Güvenlik Kontrolu 
$url=filter_var($url,FILTER_SANITIZE_URL);
if(!filter_var($url,FILTER_VALIDATE_URL) === false){
    if($url!="")
    {
         $veri=$db->query("SELECT * FROM url WHERE url='".$shorterurl."'")->rowCount();
         /*if($veri!=0) {
            //echo "Zaten Veritabanına Kayıtlı Bir Bilgi Girmeye Çalışıyorsunuz!.";
            //echo "<hr color='black'>";
         }
         else{ */
            $shorterurl = substr(md5(rand()."-".$shorterurl),0,6);
            $ekle = $db->query("INSERT INTO url(url,
            shorturl) VALUES('$url','$shorterurl')");
            if($ekle){
                
                echo '<h3 style="color:green"><b>İşlem Başarılı-Kısaltılmış Linkiniz:</b></h3>'."www.kısa.url-".$shorterurl;
                echo "<hr color='black'>";
            }
            else{
                echo "Hata Bulundu !";
                echo "<hr color='black'>";
            }
         }
        
    }
else
    {
    echo '<span style="font-weight: bold; color: red;">İŞLEM BAŞARISIZ-GEÇERSİZ URL!</span>';
    }   
    //}
}
?>