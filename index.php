<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$persons=array(
    array(
        "isim"=>"Ali",
        "soyad"=>"Cetin",
        "age"=>37
    ),
    array(
        "isim"=>"Mustafa",
        "soyad"=>"Cetin",
        "age"=>10
    )
    )
?>


    
        
        <?php
      foreach($persons as $person){?>
      <ul>
        <li><?php echo $person["isim"]?> </li>
        <li><?php echo $person["soyad"]?> </li>
        <li><?php echo $person["age"]?> </li>
        </ul>
       <?php }
        ?>
       
  
      
        
      

    <script>
       
    </script>
</body>
</html>
