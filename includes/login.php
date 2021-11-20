<?php

// Verbindung
$serverName = "localhost";
$datenbank = "dk_teamprojekt";
$User = "root";
$Pass = "";

$verbindung = new mysqli($serverName, $User, $Pass,$datenbank);

// Kategorien
$anfrage="SELECT * FROM produkte where name='elektronik'";
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


     if($row["id"])
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
