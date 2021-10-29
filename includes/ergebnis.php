<?php


if($_GET)
{
   
    if($_GET["aktion"]=="+")
    {
        $zeil1=($_GET["zahl1"].$_GET["aktion"].$_GET["zahl2"]."<br>");
        $zeil2=($_GET["zahl1"]+$_GET["zahl2"]);
    };
    if($_GET["aktion"]=="*")
    {
        echo $_GET["zahl1"]*$_GET["zahl2"];
    };
    if($_GET["aktion"]=="-")
    {
        echo $_GET["zahl1"]-$_GET["zahl2"];
    };
    if($_GET["aktion"]=="/")
    {
        echo $_GET["zahl1"]/$_GET["zahl2"];
    }
   
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("head.php")?>
</head>
<body>
   <div class="container">
   <h3><?php echo $zeil1?></h3>
    <h3><?php echo $zeil2?></h3>
    <button class="btn btn-primary">Clik</button>
   </div>
</body>
</html>