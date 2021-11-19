<?php
include("header.php");
include("db.php");
if(!empty($_GET["id"]))
{
    $post_id=$_GET["id"];
}

$anfrage="SELECT * FROM posts WHERE id=$post_id";
$result=$db->query($anfrage);
$row=$result->fetch_assoc();
?>
    <main>
    <?php
    if(!isset($post_id))
    {
        echo("Post nicht gefunden.");
    }
    else
    {
        if($result->num_rows==0)
        {
            echo ("Post nicht gefunden! ");
        }
        else{
           
            $anfrage="SELECT * FROM  category WHERE id=".$row["category"];
            $result=$db->query($anfrage);
            $kat_row=$result->fetch_assoc();

            ?>
            <h1><?= $row["titel"]?></h1>

            <a href="category.php?id=<?= $kat_row["id"]?>"><?= $kat_row["name"] ?></a>
            <p><?= $row["content"]?></p>
            <hr>
            <span><?= $row["datum"]?></span>




        
        <?php
        }
        }
        ?>

    </main>
<?php
include("sidebar.php");
include("footer.php");
?>