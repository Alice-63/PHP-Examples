<?php


$datei=filesize("merhaba.txt");
echo $datei."<br>";

$name=$_POST["name"];
$surname=$_POST["surname"];
$email=$_POST["email"];
$pass=$_POST["pass"];

//============= DB===============
$serverName="localhost";
$datenbankName="dk_teamprojekt";
$datenbankUser="root";
$datenbankPass="";


$conn=new mysqli($serverName,$datenbankUser,$datenbankPass);


?>
