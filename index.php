<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST" id="myForm">
        <input type="text" name="personelAdi">
        <input type="text" name="email" id="">
        <button type="submit" onclick="add()">
        <?php
       echo add()
        
        ?>
        
        </button>
    </form>

    <script>
        function add(){
           console.log(document.getElementById("myForm").submit())
        }
    </script>
</body>
</html>
<?php

$persons=array(
    array=()
)
?>