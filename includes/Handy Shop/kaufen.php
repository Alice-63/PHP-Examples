<?php

// if(empty($_POST["id"]))
// {
//     header("Location:index.php");
//     exit();
// }

$id=$_POST["id"];

$server="localhost";
$user="root";
$pass="";
$datebank="dk_teamprojekt";

$db=new mysqli($server,$user,$pass,$datebank);

$sql="SELECT * FROM handys WHERE id=".$id.";";
$result=$db->query($sql);

if($result->num_rows==0)
{
    header("Location:index.php");
    exit();
}
else{
    $produkt=$result->fetch_assoc();

    if($produkt["acount"]>0)
    {
        // UPDATE
        $sql="UPDATE handys SET acount=".($produkt["acount"]-1)." WHERE id=".$id.";";
        if($db->query($sql)===TRUE)
        {
            echo ("Erfolgreich gekauft!");
        }
    }
    else
    {
        header("Location:index.php");
        exit();
    }
}

$db->close();
?>