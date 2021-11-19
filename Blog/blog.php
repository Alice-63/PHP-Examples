<?php
include("header.php");
include("db.php");
?>
    <main>
    <h1>Wilkommen bei Blog</h1>

    Kategorien:
    <ul>
       <?php
       $anfrage="SELECT * FROM category";
       $result=$db->query($anfrage);

       while($row=$result->fetch_assoc())
       {?>
          <li><a href="category.php?id=<?=$row["id"]?>"><?=$row["name"]?></a></li>
       
       
       <?php }

       
       
       ?>
    </main>
<?php
include("sidebar.php");
include("footer.php");
include("close.php");
?>

