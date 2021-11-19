<?php
include("../db.php");

if(isset($_POST["new_category"]))
{
    exit("Kategorie");
}
else if(isset($_POST["new_post"]))
{
    $anfrage="INSERT INTO posts (titel,content,category,Autor,datum) VALUES($_POST["post_titel"],$_POST["post_inhalt"],$_POST["post_kategorie"],1,$_POST["date"])"
    $result=$db->query($anfrage);

    if($result)
    {
        echo "Beitrag erstelt!";
    }
    else
    {
        echo "Beitrag nicht erstelt!";
    }
   
}

?>
