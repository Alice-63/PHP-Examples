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


$anfrage="INSERT INTO benutzer(benutzername,passwort,email,gruppe) VALUES('$benutzername','$pass','$email',3)";



if($conn->query($anfrage)===true)
{
    setcookie("eingeloggt","1",0,"/");
    setcookie("id", $conn->insert_id,0,"/");
    header("Location:index.php");
}
else{
    echo "error!";
}


include("../close.php")

?>