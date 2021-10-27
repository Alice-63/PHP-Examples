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
    "name"=>"Ali",
    "surname"=>"Cetin",
    "age"=>37
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

if($_GET){
    $zwei=$_GET["zwei"];
    $fünf=$_GET["fünf"];
    $figure=$_GET["figure"];

    $recnung=array(
        "zwei"=>$zwei,
        "fünf" =>$fünf,
        "figure"=>$figure

    );
}



?>

<body>
    <form action="" method="get">
        <input type="text" name="zwei" >
        <input type="text" name="fünf" >
        <input type="text" name="figure" >
        
        <button type="submit">Click</button>
    </form>
    <hr>
    <div>
       
        
        <p><?php echo 5*2?></p>
       
        
    </div>
</body>
</html>