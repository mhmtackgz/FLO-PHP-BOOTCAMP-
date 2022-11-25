<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h3 style="text-align:center">ÜRÜN SATIN AL</h3>
  <?php
      $urunler = array(
         array("no" => "urun1", "urun" => "Ülker Gofret", "fiyat" => "10"),
         array("no" => "urun2", "urun" => "Kent Gofret", "fiyat" => "20"),
         array("no" => "urun3", "urun" => "Eti Gofret", "fiyat" => "30"),
         array("no" => "urun4", "urun" => "Torku Gofret", "fiyat" => "40"),
         array("no" => "urun5", "urun" => "Nestle Gofret", "fiyat" => "50"),
         array("no" =>"urun6","urun"=>"Nestle Damak","fiyat"=>"30")
      );

      echo "<table width='100%' border='1'>
      <tr>
         <th width='60%'>Ürün Açıklama</th>
         <th width='20%'>Fiyat</th>
         <th width='20%'>Adet</th>
      </tr>";

      foreach ($urunler as $urun) {
         echo "<tr>
         <td>$urun[urun]</td>
         <td>$urun[fiyat] ₺</td>
         <td>
            <form action='islem.php?hareket=ekle' method='post'>
               <input type='text' name='adet' required>
               <input type='hidden' name='urun' value='$urun[no]'>
               <input type='submit' value='Ekle'>
            </form>
         </td>
         </tr>";
      }

      echo "</table>";

      $sepetsay = count($_SESSION["sepet"]);

      echo "<br><br><h3 style='text-align:center'>SEPET İÇERİĞİ ($sepetsay)</h3>";

      if ($sepetsay > 0) {
         echo "<table width='100%' border='1'>
         <tr>
            <th width='45%'>Ürün Açıklama</th>
            <th width='15%'>Fiyat</th>
            <th width='15%'>Adet</th>
            <th width='15%'>Toplam</th>
            <th width='10%'>Sil</th>
         </tr>";
   
         $sepettoplam = 0;
   
         foreach ($_SESSION["sepet"] as $urunno => $urunadet) {
            $urunsira = array_search($urunno, array_column($urunler, 'no'));
            $urunad = $urunler[$urunsira]["urun"];
            $urunfiyat = $urunler[$urunsira]["fiyat"];
            $uruntoplam = $urunadet * $urunfiyat;
            $sepettoplam += $uruntoplam;
   
            echo "<tr>
            <td>$urunad</td>
            <td>$urunfiyat ₺</td>
            <td>$urunadet</td>
            <td>$uruntoplam ₺</td>
            <td><center><button><a href='islem.php?hareket=sil&urunno=$urunno' onclick=\"if (!confirm('Ürünü Silmek İstediğinize Emin misiniz?')) return false;\">Sil</a></button><center></td>
            </tr>";
         }
   
         echo "</table>
         <p style='text-align:right'>
            <a href='islem.php?hareket=bosalt' onclick=\"if (!confirm('Sepetteki Tüm Ürünleri Silmek İstediğinize Emin misiniz?')) return false;\">Sepeti Boşalt</a>
         </p>
         <h4 style='text-align:right'>Sepet Toplamı: $sepettoplam ₺</h4>";
      } else {
         echo "<h5 style='text-align:center'>SEPET İÇERİĞİ BOŞ!</h5>";
      }

      
  ?>

</body>
</html>