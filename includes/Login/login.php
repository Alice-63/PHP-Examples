<?php

    echo $_GET["name"]." <br>".$_GET["surname"];
    echo "<br><a href='newLogin.php'>Click</a>";

$name=$_GET["benutzername"];
$surname=$_GET["email"];
$name=$_GET["pass"];



$server="localhost";
$datenbank="blog";
$user="root";
$pass="";


$conn=new mysqli($server,$user,$pass,$datenbank);

$anfrage="SELECT * FROM newtabel WHERE email='$email' OR benutzername='$benutzername'";
$result=$conn->query($anfrage);

if($result->num_rows>0)
{
    header("Location:loginPage.php?emailFehler=1");
    exit();
};


$anfrage="INSERT INTO benutzer(benutzername,email,passwort) VALUES('$benutzername','$email','$pass')";

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