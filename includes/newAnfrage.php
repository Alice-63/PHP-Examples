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
    echo "<li>". $row["name"]."</li>";
    if($row["name"]==$name)
    {
        if($row["surname"]==$surname)
        {
            echo "Herzlicahen Willkomen <br><li> $name $surname</li>";
            break;
        }
        else{
            echo "Falsch!";
        }
    }
    
        echo "Name ist Falsch";
        break;
    
}




// if($result->num_rows==0)
// {
//     echo ("Keine Benutzer!");
// }
// else{
//     $account=$result->fetch_assoc();
//     if($account["surname"]==$surname)
//     {
//         echo "erfolgreich eingelogt!";
//     }
//     else
//     {
//         echo "Falsch!";
//     }
// }





?>