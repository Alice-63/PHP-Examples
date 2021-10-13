<?php


session_start();


$_SESSION["UrunAdi"] = "Monitor";
$_SESSION["marka"] = "Simens";
$_SESSION["boyut"] = "22";
$_SESSION["Type"] = "led";

print_r($_SESSION);
