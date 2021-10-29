<?php


if($_GET)
{
   
    if($_GET["aktion"]=="+")
    {
        echo $_GET["zahl1"].eval('return $_GET["aktion"]').$_GET["zahl2"];
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