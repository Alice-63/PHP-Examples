<?php

// if(empty($_POST["email"]) || empty($_POST["passwort"]))
// {
//     exit("Es gibt einen fehler!");
// };

$email=$_POST["email"];
$passwort=$_POST["passwort"];

echo $email." ".$passwort;

$serverName="localhost";
$datenbankName="dk_teamprojekt";
$datenbankUser="root";
$datenbankPass="";


$conn=new mysqli($serverName,$datenbankUser,$datenbankPass,$datenbankName);
$anfrage="SELECT * FROM benutzer";
$ergebnis=$conn->query($anfrage);
$anfrageArray=$ergebnis->fetch_assoc();

echo(var_dump($anfrageArray))

// $anfrage="INSERT INTO benutzer(email,passwort) Values('".$email."','".$passwort."')";

// $result=$conn->query($anfrage);
// echo $result;




















?>
