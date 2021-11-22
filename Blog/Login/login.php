<?php

  

$benutzername=$_GET["benutzername"];
$email=$_GET["email"];
$passwort=$_GET["passwort"];



$server="localhost";
$datenbank="blog";
$user="root";
$pass="";


$conn=new mysqli($server,$user,$pass,$datenbank);

$anfrage="SELECT * FROM benutzer WHERE email='".$email."' OR benutzername='".$benutzername."'";
$result=$conn->query($anfrage);

if($result->num_rows>0)
{
    header("");
    exit();
};


$anfrage="INSERT INTO benutzer(benutzername,passwort,email,gruppe) VALUES('$benutzername','$passwort','$email',3)";



if($conn->query($anfrage)===true)
{
    setcookie("eingeloggt","1",0,"/");
    setcookie("id", $conn->insert_id,0,"/");
    header("Location:../index.php");
}
else{
    echo "error!";
}


include("../close.php")

?>