<?php
include("header.php");
include("db.php");
if(!empty($_GET["id"]))
{
    $autor_id=$_GET["id"];
}

$anfrage="SELECT * FROM posts WHERE id=".$autor_id;
      $result=$db->query($anfrage);
      $row=$result->fetch_assoc();


?>
    <main>

<ul>
                <?php
              
                ?>
                        
                        <li><a href="post.php?id=<?=$row["id"]?>"><?= $row["titel"]?></a></li>
                        
                <?php
            ?>
   
                
   </ul>


    </main>
<?php
include("sidebar.php");
include("footer.php");
?>