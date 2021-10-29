<?php


if($_GET)
{
   
    if($_GET["aktion"]=="+")
    {
        $zeil1=($_GET["num1"].$_GET["aktion"].$_GET["num2"]."<br>");
        $zeil2=($_GET["num1"]+$_GET["num2"]);
    };
    if($_GET["aktion"]=="*")
    {
        $zeil1=($_GET["num1"].$_GET["aktion"].$_GET["num2"]."<br>");
        $zeil2=$_GET["num1"]*$_GET["num2"];
    };
    if($_GET["aktion"]=="-")
    {
        $zeil1=($_GET["num1"].$_GET["aktion"].$_GET["num2"]."<br>");
        $zeil2=$_GET["num1"]-$_GET["num2"];
    };
    if($_GET["aktion"]=="/")
    {
        $zeil1=($_GET["num1"].$_GET["aktion"].$_GET["num2"]."<br>");
        $number=$_GET["num1"]/$_GET["num2"];
        $zeil2=number_format($number,2,'.',',');
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
<body class="bg bg-success">
<div class="container-fluid ">
<div class="row justify-content-md-center  ">
    <div class="col-md-2 " >
        <h1 class="mt-3 mb-3 text-warning">Ergebnis</h1>
        <h1 ><?php echo $zeil1 ."="?></h1>
        <h1><?php echo $zeil2 ?></h1>
        <a class="btn btn-warning w-100" href="index.php">Zurück</a>
    </div>
</div>
</div>
</body>
</html>