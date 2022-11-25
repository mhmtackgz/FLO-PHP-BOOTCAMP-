<?php
    $baglanti= new PDO("mysql:host=localhost;dbname=kisiler","root","12345678") ;
    $baglanti->exec("SET NAMES utf8");
    $baglanti->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>