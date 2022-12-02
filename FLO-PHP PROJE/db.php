<?php
try{
    $db = new PDO("mysql:host=localhost;dbname=urlveritabani","root","12345678");
} catch(Exception $e) {
    echo "Hata:".$e;
} 



?>