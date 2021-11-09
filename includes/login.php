<?php

if(empty($_POST["email"]) || empty($_POST["passwort"]))
{
    exit("Es gibt einen fehler!");
};

$email=$_POST["email"];
$passwort=$_POST["passwort"];

echo $email." ".$passwort;

$serverName="localhost";
$datenbankName="dk_teamprojekt";
$datenbankUser="root";
$datenbankPass="";


$conn=new mysqli($serverName,$datenbankUser,$datenbankPass,$datenbankName);

// $anfrage="INSERT INTO benutzer(email,passwort) Values('".$email."','".$passwort."')";

// $result=$db->query($anfrage);
// echo $result;




















?>
