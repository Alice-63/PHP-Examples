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

$anfrage2="SELECT * FROM name='$name'";
$result2=$conn->query($anfrage2);

if($result2->num_rows==TRUE)
{
    exit("Diese Email existiert bereits!");
}
else{
    $anfrage="INSERT INTO newtabel(name,surname) VALUES('$name','$surname')";

    $result=$conn->query($anfrage);
    
    if($result)
    {
        echo "Succsseful";
    }
    else{
        echo "error!";
    }
    
}





?>