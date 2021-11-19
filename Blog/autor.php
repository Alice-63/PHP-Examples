<?php
include("header.php");
include("db.php");
if(!empty($_GET["id"]))
{
    $autor_id=$_GET["id"];
}


?>
    <main>
    <?php
      $anfrage="SELECT * FROM posts WHERE id=$autor_id";
      $result=$db->query($anfrage);
      $row=$result->fetch_assoc();

    if(!isset($autor_id))
    {
        echo("Autor nicht gefunden.");
    }
    else
    {
        if($result->num_rows==0)
        {
            echo ("Autor nicht gefunden! ");
        }
        else{?>
        <ul>
        <?php
         

            
                ?>

                
                <li><a href="post.php?id=<?=$row["id"]?>"><?= $row["titel"]?></a></li>
                


          <?php 

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
?>