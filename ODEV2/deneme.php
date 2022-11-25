<?php
$dizi = array("Ankara","İzmir","İstanbul", "Bursa", "Trabzon","Samsun","Ordu","Malatya", "Muş", "Ağrı");
$sira=3;
$i=1;
echo "
<table border=”1″ width=”100%” align=”center”>
<tbody>
<tr>";
foreach($dizi as $liste){
echo "
<td height='20'>$liste</td>
“;
if ($i % $sira===0)
echo “</tr>
";
$i++;
}
echo "";
?>