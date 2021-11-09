<?php

if(empty($_POST["email"]) || empty($_POST["passwort"]))
{
    exit("Es gibt einenen fehler!");
};

$email=$_POST["email"];
$passwort=$_POST["passwort"];

$server="localhost";
$benutzer="root";
$pass="";
$database="benutzer";

$db=new mysqli($server,$benutzer,$pass,$benutzer);

$anfrage="INSERT INTO benutzer(email,passwort) Values('".$email."','".$passwort."')";

$result=$db->query($anfrage);
echo $result;




















?>
