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
<body style="background:darkorange;">
  <div class="row">

        <h1>Konto Erstellen</h1>
      <div class="col-md-6 d-flex justify-content-center">
      <form action="" class="form-group">
      <input class="form-control" type="text" placeholder="Name">
      <input class="form-control" type="text" placeholder="Surname">
      <input class="form-control" type="text" placeholder="E-Mail">
      <input class="form-control" type="text" placeholder="Password">
      <input class="form-control" type="submit" value="Konto Erstellen">
  </form>
      </div>
  </div>

   
</body>
</html>