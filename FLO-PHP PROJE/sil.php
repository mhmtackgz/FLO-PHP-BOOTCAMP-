
<?php
include"db.php";
$silincekveri = $_GET["id"];

$delete = $db->prepare("DELETE FROM url where id=$silincekveri");
$kontrol = $delete->execute();

if($kontrol){
    echo 
    "<script>
    alert('KAYIT BAŞARIYLA SİLİNDİ!');
    window.location.href='adminpanelgiris.php';
    </script>";
}
else{
    echo "HATA";
}
?>