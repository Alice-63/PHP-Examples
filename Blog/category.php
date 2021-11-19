<?php
include("header.php");
include("db.php");
if(!empty($_GET["id"]))
{
    $kat_id=$_GET["id"];
}

$anfrage="SELECT * FROM category WHERE id=$kat_id";
$result=$db->query($anfrage);
$row=$result->fetch_assoc();





?>
<main>
    <?php
    if(!isset($kat_id))
    {
        echo("Kategorie nicht gefunden.");
    }
    else
    {
        if($result->num_rows==0)
        {
            echo ("Kategori nicht gefunden! ");
        }
        else{

        
        
        ?>

    <h1>Willkommen in Kategorie <b style="color:red;"><?=$row["name"]?></b></h1>

    Posts:
    <ul>
            <?php
                $anfrage="SELECT * FROM posts WHERE category=$kat_id";
                $result=$db->query($anfrage);
                while($row=$result->fetch_assoc())
                {
                    ?>
                    <li><?= $row["titel"]?></li>
                    <?php
                }
            ?>
    </ul>
    <?php
        }
    }
    ?>
</main>
<?php
include("sidebar.php");
include("footer.php");
include("close.php");
?>
