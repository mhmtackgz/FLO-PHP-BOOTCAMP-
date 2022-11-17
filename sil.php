
<?php
$baglan = new mysqli("localhost","root","12345678","rehber");
$baglan->set_charset("utf8");
$kayitgetir = $_GET["id"];
$sorgu = $baglan->query("DELETE  FROM rehberbl where id=$kayitgetir");
if($sorgu){
echo 
"<script>
alert('KAYIT SİLİNDİ!');
window.location.href='listele.php';
</script>";

}else{
    echo "Başarısız";
}

?>