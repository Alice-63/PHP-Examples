<?php


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
    <ul>
        <?php
        while($row=$result->fetch_assoc())
        {
            echo "<li>$row['name']</li>";
        }
        ?>
    </ul>
</body>
</html>