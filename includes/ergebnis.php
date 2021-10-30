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
