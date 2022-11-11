<?php
session_start();
$urunler= array (
    'Ülker Çikolatalı Gofret 40 gr'=>10,
    'Eti Damak Kare Çikolata 60 gr'=>20,
    'Nestle Bitter Çikolata 50 gr' =>20
);

foreach ($urunler as $key=>$value){
   // echo "Ürünün Adı:$key"."<br>"."Ürünün Fiyatı:$value"."<br>";
    echo
'<div style="border:1px solid#ddd;padding:10px;margin-bottom: 10px" >
<h2>Ürün'.":".$key.'</h2>
<h2>Ürün Fiyatı'.":".$value."TL".'</h2>
<h2>Adet Giriniz :<input type="number" name="adet"></h2>
<p>Ürün Açıklaması</p>
<a href = "?ekle='.$urunler.'">[sepete ekle]</a>
</div>';
}
if(isset($_GET['ekle'])){
   $id = $_GET['ekle'];
   setcookie('urun['.$id.']',$id,time()+86400);
}

print_r($_COOKIE['urunler']);




?>