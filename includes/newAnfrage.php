<?php
    echo $_GET["name"]." <br>".$_GET["surname"];
    echo "<br><a href='newAnfragePage.php'>Click</a><br>";

$name=$_GET["name"];
$surname=$_GET["surname"];


$server="localhost";
$datenbank="dk_teamprojekt";
$user="root";
$pass="";


$conn=new mysqli($server,$user,$pass,$datenbank);

$anfrage="SELECT * FROM newtabel WHERE name='$name'";

$result=$conn->query($anfrage);





if($result->num_rows==0)
{
    echo ("Keine Benutzer!")
}
else{
    $account=$result->fetch_assoc();
    echo $account;
}





?>