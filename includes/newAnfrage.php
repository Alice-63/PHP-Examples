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





while($row=$result->fetch_assoc())
{
   
    if($row["name"]==$name && $row["surname"]==$surname)
    {
        echo "Wilkommen :".$name;
        echo "<br> $surname";
    }
    else{
        echo "nicht Gefunden!";
    }

   }




?>