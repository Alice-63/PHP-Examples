<?php

if(empty($_GET["id"]))
{
    header("Location:index.php");
    exit();
}

$id=$_GET["id"];

$server="localhost";
$user="root";
$pass="";
$datebank="dk_teamprojekt";

$db=new mysqli($server,$user,$pass,$datebank);

$sql="SELECT * FROM handys";

$result=$db->query($sql);





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
    <?php

    $sql="SELECT * FROM handys WHERE id=".$id.";";
    $result=$db->query($sql);

    if($result->num_rows==0)
    {
        echo "<h3>Podukt hat nicht gefunden!</h3>";
       
    }
    else
    {
        $produkt=$result->fetch_assoc();
    ?>
    <h1><?= $produkt["name"]?></h1>
    <p><?= $produkt["description"]?></p>
    <h4>Preis: <?= $produkt["preis"]?> €</h4>
    <?php
    if($produkt["count"]>0)
    { ?>

        <form methode="post" action="kaufen.php">
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="submit" value="Kaufen">
        </form>
        
    
    
    <?php
    }
    else{
        ?>
        <span>Ausverkauft</span>

        <?php
    }
    }

    ?>


    
</body>
</html>