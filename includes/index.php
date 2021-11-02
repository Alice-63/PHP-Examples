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
   <form action="" method="post">
   <input type="number" name="name">
   <label for=""><input type="checkbox" name="namecook">Tikla</label>
   <button type="submit">Save</button>
   </form>

   <div><?php all(6);?></div>
</body>
</html>