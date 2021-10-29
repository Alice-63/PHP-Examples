<?php


if($_GET)
{
   
    if($_GET["aktion"]=="+")
    {
        print($_GET["zahl1"]($_GET["aktion"])$_GET["zahl2"]);
        echo ($_GET["zahl1"]+$_GET["zahl2"]);
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