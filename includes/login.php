<!-- <?php

// if(empty($_POST["email"]) || empty($_POST["passwort"]))
// {
//     exit("Es gibt einen fehler!");
// };

// $email=$_POST["email"];
// $passwort=$_POST["passwort"];



// $serverName="localhost";
// $datenbankName="dk_teamprojekt";
// $datenbankUser="root";
// $datenbankPass="";


// $conn=new mysqli($serverName,$datenbankUser,$datenbankPass,$datenbankName);
// $anfrage="SELECT * FROM users";
// $ergebnis=$conn->query($anfrage);

// // for($i=0;$i< $ergebnis->num_rows;$i++)
// // {
// //     $row=$ergebnis->fetch_assoc();

// //     echo $row["vorname"]."<br>";
// //     echo $row["nachname"]."<br>";
// // }

// while($row==$ergebnis->fetch_assoc())
// if($row["email"]==$email)
// {
//     echo "Gefunden";
// }
// else{
//     echo "nicht gefunden";
// }

// $anfrage="INSERT INTO benutzer(email,passwort) Values('".$email."','".$passwort."')";

// $result=$conn->query($anfrage);
// echo $result;




















?> -->
<?php

// Verbindung
$serverName = "localhost";
$datenbank = "dk_teamprojekt";
$User = "root";
$Pass = "";

$verbindung = new mysqli($serverName, $User, $Pass,$datenbank);

// Kategorien
$anfrage="SELECT * FROM kategorien where name='elektronik'";
$result=$verbindung->query($anfrage);
$row=$result->fetch_assoc();

// Produkte
$anfrage2="SELECT * FROM produkte where kategorie='1'";
$result2=$verbindung->query($anfrage2);


$verbindung->close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elektronik</title>
</head>
<body>

<?php

    /**
     * TABELLE: kategorien
     * id | name
     * 
     
     * TABELLE: produkte
     * id | name | preis | kategorie
     */


     if($row["id"]==1)
     {
         ?>
         <ul>
             <li><?=$row["id"]?></li>
             <li><?=$row["name"]?></li>
         </ul>
         <hr>
        <?php
         while($row2=$result2->fetch_assoc())
            {?>
             <ul>
                <li><?=$row2["id"]?></li>
                <li><?=$row2["name"]?></li>
                <li><?=$row2["preis"]?></li>
                <li><?=$row2["kategorie"]?></li>
            </ul>

           <?php }?>

        
     <?php
    }
    ?>




    
</body>
</html>
