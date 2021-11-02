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
</head>
<body style="background:darkorange;">
  <form action="">
      <input type="text" placeholder="Name">
      <input type="text" placeholder="Surname">
      <input type="text" placeholder="E-Mail">
      <input type="text" placeholder="Password">
      <input type="submit" value="Konto Erstellen">
  </form>

   <div><?php all(6);?></div>
</body>
</html>