<?php


$datei=filesize("merhaba.txt");
echo $datei."<br>";

$name=$_POST["name"];
$surname=$_POST["surname"];
$email=$_POST["email"];
$pass=$_POST["pass"];

//============= DB===============
$serverName="localhost";
$datenbankName="dk_teamprojekt";
$datenbankUser="root";
$datenbankPass="";


$conn=new mysqli($serverName,$datenbankUser,$datenbankPass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  

$anfrage="INSERT INTO `users` (`id`, `vorname`, `nachname`, `email`, `passwort`) VALUES ('.$name.', '.$surname.', '.$email.', '.$pass.', '')";

if($verbindung->query($anfrage)==true)
{
    echo "Connected successfully";
}
else{
    echo "Connected unsuccessfull!";
}


?>
