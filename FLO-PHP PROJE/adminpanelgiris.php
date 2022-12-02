<?php

include("db.php");
$sorgu = $db->query("SELECT * FROM url");
echo "<table class='th' width='100%' border='1'>
<tr align='center'>
<th>Sıra NO </th>
<th>Girilen Url</th>
<th>Kısaltılan Url</th>
<th>Silme İşlemleri</th>


";

while($satir = $sorgu->fetchObject()){
    
    echo
    "<tr class='tr' align='center'>
    <td>$satir->id</td>
    <td>$satir->url</td>
    <td>www.kısa.url-$satir->shorturl</td>
    <td><a href='sil.php?id=$satir->id'>SİL</a></td>

    </tr>";
}
echo "</table>";  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="tasarim.css">

    <meta charset="UTF-8">
    <script type="text/javascript">
function yazdir()
{
	window.print();

}
function silOnayla()
{
return confirm("Silmek istediğinizden emin misiniz?");
}
</script>
</head>
<body bgcolor="#E6E6FA">
<div style="background-color: orange;" class="butonlar">
        <button style="background-color:black; color:orange ;"><a href='ara.php'>Verileri ARA</a></button>
        <button style="background-color:black; color:orange"><a href='adminpanelgiris.php'>Verileri Listele</a></button>
        <button style="background-color:black; color:orange"><a href='index.php'>Kullanıcı Ekranına Dön</a></button>
        <input style="background-color:black; color:orange" type ="button" value="Yazdır" onClick="yazdir()"/>
</div>
</body>
</html>

<?php




?>