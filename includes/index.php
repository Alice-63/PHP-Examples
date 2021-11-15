<?php

$eingelogt=false;
$name="";

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
    Bitte Registiriren! <a href="newLogin.php">Click</a>

    <?php
}?>

   
</body>
</html>