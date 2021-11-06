<?php




$name=$_POST["name"];
$surname=$_POST["surname"];
$email=$_POST["email"];
$pass=$_POST["pass"];

//============= DB===============
$serverName="localhost";
$datenbankName="dk_teamprojekt";
$datenbankUser="root";
$datenbankPass="";


$conn=new mysqli($serverName,$datenbankUser,$datenbankPass,$datenbankName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


$anfrage="INSERT INTO users (vorname=:name, nachname=:surname, email=:email, passwort=:pass)";
$data=array("name"=>$name,"surname"=>$surname,"email"=>$email,"pass"=>$pass)

$result=$anfrage->execute($data);





if($conn->query($result)==true)
{
    echo "Connected successfully .<a href='index.php'>Neue Konto erstellen</a>";
}
else{
    echo "Connected unsuccessfull!";
}


// VALUES ('".$name."', '".$surname."', '".$email."', '".$pass."')

?>
