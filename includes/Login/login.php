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

if($result->num_rows>0)
{
    header("Location:newLogin.php?emailFehler=1");
    exit();
};


$anfrage="INSERT INTO newtabel(name,surname) VALUES('$name','$surname')";

$result=$conn->query($anfrage);

if($result)
{
    setcookie("eingeloggt","1");
    setcookie("name", $name);
    header("Location:index.php");
}
else{
    echo "error!";
}




?>