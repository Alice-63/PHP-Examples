<?php

$eingelogt=false;
$name="";

if(isset($_COOKIE["eingeloggt"]) && $_COOKIE["eingeloggt"]=="1")
{
    $eingelogt=true;
}
if(!empty($_COOKIE["name"]))
{
    $name=$_COOKIE["name"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include("head.php");
    ?>
</head>
<body style="background:black;">
 
<?php
 if($eingelogt)
 {
?>

<h1>Herzlichen Wilkkomen <?= $name?> bei Digitale Karierre</h1>

<?php
}
else{
    ?>
    Bitte Registiriren! <a href="newAnfragePage.php">Click</a>

    <?php
}?>

   
</body>
</html>