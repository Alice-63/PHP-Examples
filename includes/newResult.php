<?php

    echo $_GET["name"]." <br>".$_GET["surname"];
    echo "<br><a href='newLogin.php'>Click</a>";

$name=$_GET["name"];
$surname=$_GET["surname"];


$server="localhost";
$datenbank="dk_teamprojekt";
$user="root";
$pass="";


$conn=new mysqli($server,$user,$pass,$datenbank);

$anfrage="SELECT * FROM newtabel WHERE name='$name'";
$result=$conn->query($anfrage);

if($result2->num_rows>0)
{
    exit("<br>Diese Email existiert bereits!");
};


$anfrage="INSERT INTO newtabel(name,surname) VALUES('$name','$surname')";

$result=$conn->query($anfrage);

if($result)
{
    echo "Succsseful";
}
else{
    echo "error!";
}




?>