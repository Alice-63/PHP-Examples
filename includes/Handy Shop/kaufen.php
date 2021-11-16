<?php

if(empty($_POST["id"]))
{
    header("Location:index.php");
    exit();
}

echo "<h1>".$_POST["id"]."</h1>";



?>