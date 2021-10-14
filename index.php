<?php


session_start();


// unset($_SESSION["fiyat"]);

// session_unset();

$_SESSION["Yeni"]="Kitap";
$_SESSION["Eski"]="Tablet";
$_SESSION["kulüp"]="asagi"


print_r($_SESSION)


?>