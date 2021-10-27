<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

// echo "Name: ".$_GET["name"]."<br>";
// echo "Name: ".$_GET["surname"];

// $e=false;
// echo ("$e");

$myarray=array(
   "Ali",
  "Cetin",
    37
);
// $new["name"]="Veli";
// $new["surname"]="Candan";
// $new["age"]="38";

// $myarray["adres"]="Germany";

// print_r($new);
// echo "<br>";
// print_r($myarray);
// echo "<br>";

// echo "Name: ". $myarray["name"];

// die();

for ($i=0; $i < 4; $i++) { 
    echo $myarray[$i]."<br>";
}



?>

<body>
    <form action="" method="get">
        <input type="text" name="name">
        <input type="text" name="surname">
        <button>Click</button>
    </form>
</body>
</html>