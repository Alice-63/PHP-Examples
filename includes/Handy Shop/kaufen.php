<?php

if(empty($_POST["id"]))
{
    header("Location:index.php");
    exit();
}

$id=$_POST["id"];

$server="localhost";
$user="root";
$pass="";
$datebank="dk_teamprojekt";

$db=new mysqli($server,$user,$pass,$datebank);




?>