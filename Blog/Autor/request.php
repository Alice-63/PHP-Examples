<?php
include("../db.php");

if(isset($_POST["new_category"]))
{
    exit("Kategorie");
}
else if(isset($_POST["new_post"]))
{
    $inhalt=htmlspecialchars($_POST["post_inhalt"]);
    $date="2021.12.12";
    $titel=$_POST["post_titel"];
        $anfrage="INSERT INTO posts (titel,content,category,Autor) VALUES({$titel},{$inhalt},{$_POST["post_kategorie"]},1)";
    $result=$db->query($anfrage);

    if($result)
    {
        echo "Beitrag erstelt!";
    }
    else
    {
        echo $db->error;
    }
   
}

?>
