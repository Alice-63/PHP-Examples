<?php

include("../db.php");
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
    Neue Beitrag erstellen:
    <br>
    <form action="request.php" method="post" >
        
        <input type="text" placeholder="Name" name="post_titel"> <br>
        <textarea name="post_inhalt" placeholder="Inhalt"></textarea> <br>
        <select name="post_kategorie" id=""> <br>
            <?php
            $anfrage="SELECT * FROM  category"
            $result=$db->query($anfrage);
            $kat_row=$result->fetch_assoc();
            
            
            ?>
            

        </select>
        <input type="submit" name="new_post"value="Erstellen">
    </form>
</body>
</html>