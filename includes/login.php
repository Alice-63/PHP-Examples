<?php

if(!empty($_POST["email"]) || empty($_POST["passwort"]))
{
    exit("Es gibt einenen fehler!");
};

$email=$_POST["email"];
$passwort=$_POST["passwort"];

$host="localhost";
$benutzer="root";
$pass="";
$database="benutzer";




















?>
