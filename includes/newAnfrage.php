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

$anfrage="SELECT * FROM newtabel";

$result=$conn->query($anfrage);

while($row=$result->fetch_assoc())
{
   
    if($row["name"]==$name && $row["surname"]==$surname)
    {
        echo "Wilkommen :".$name;
    }
    else{
        echo "Fehler!";
    }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
    <input name="name" type="text">    
    <input name="surname" type="text">
    <input type="submit" name="" value="Anruffen">
    </form>
</body>
</html>