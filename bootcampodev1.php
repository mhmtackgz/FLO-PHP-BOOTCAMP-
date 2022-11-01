
    <?php

$ciftlik = array(
    'agil' => 5,
    'kapasite' => 150,
    'koyun' => 73,
);

$agilSayisi = $ciftlik['agil'];
$toplamKapasite = $ciftlik['kapasite'];
$toplamKoyun = $ciftlik['koyun'];

$maxKoyun = $toplamKapasite / $agilSayisi;

echo "Toplam Agil: $agilSayisi <br>";
echo "Toplam Kapasite: $toplamKapasite <br>";
echo "Toplam Koyun: $toplamKoyun <br><br>";

for ($a = $agilSayisi; $a > 0; $a--) {
    $koyun = $maxKoyun;
    if (($toplamKoyun / $maxKoyun) < 1) {
        $koyun = $toplamKoyun % $maxKoyun;
        if ($koyun < 0) {
            $koyun = 0;
        }
    }

    echo "$a.Agil: $koyun Koyun <br>";
    $toplamKoyun -= $maxKoyun;
}

if ($toplamKoyun > 0) {
    echo "<br>";
    echo "Disarida Kalan: $toplamKoyun Koyun";
}

?>
