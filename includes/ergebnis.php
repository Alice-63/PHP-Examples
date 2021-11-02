<?php


// if(empty($_POST["name"] || empty($_POST["surname"] || empty($_POST["email"] || empty($_POST["pass"]))
// {
//     echo "Achtung!"
// }
$datei=filesize("merhaba.txt");
echo $datei."<br>";

$name=$_POST["name"];
$surname=$_POST["surname"];
$email=$_POST["email"];
$pass=$_POST["pass"];

echo "Herzlichen Wilkommen $name <br> $surname"
?>
