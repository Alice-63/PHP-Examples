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
       {
           echo "<li>". $row["name"]. "</li>";
       }

       
       
       ?>
    </main>
<?php
include("sidebar.php");
include("footer.php");
?>

