<?php


function all($a){
    $b=$_GET["name"];
    echo $a*$b;
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
  <div class="row d-flex justify-content-center">

 
      <div class="col-md-6 d-flex justify-content-center">
      <form action="ergebnis.php" method="POST" class="form-group">
      <h1>Konto Erstellen</h1>
      <input required name="name" class="form-control" type="text" placeholder="Name">
      <input required name="surname" class="form-control" type="text" placeholder="Surname">
      <input required name="email" class="form-control" type="text" placeholder="E-Mail">
      <input required name="pass" class="form-control" type="text" placeholder="Password">
      <input required name="" class="form-control" type="submit" value="Konto Erstellen">
  </form>
      </div>
  </div>

  <h1><?= "asd"?></h1>
   
</body>
</html>