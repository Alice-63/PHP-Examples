<?php

    echo "<br>New Anfrage: <a href='newAnfragePage.php'> Click</a><br>";

$name=$_GET["name"];
$surname=$_GET["surname"];


$server="localhost";
$datenbank="dk_teamprojekt";
$user="root";
$pass="";


$conn=new mysqli($server,$user,$pass,$datenbank);

$anfrage="SELECT * FROM newtabel WHERE name='$name'";

$result=$conn->query($anfrage);


// while($row=$result->fetch_assoc())
// {
//     if($row["name"]==$name)
//     {
//         if($row["surname"]==$surname)
//         {
//             echo "Herzlichen Willkomen <br><li> $name $surname</li>";
//             break;
//         }
//         else{
//             echo "Falsch!";




if($result->num_rows==0)
{
    header("Location:newAnfragePage.php?emailFalsch=1");
    exit();
   
}
else{
    $account=$result->fetch_assoc();
    if($account["surname"]==$surname)
    {
        setcookie("eingeloggt","1");
        setcookie("name", $name);
        header("Location:index.php");
        // echo "erfolgreich eingelogt!";
    }
    else
    {
        header("Location:newAnfragePage.php?pwFalsch=1");
    }
}





?>