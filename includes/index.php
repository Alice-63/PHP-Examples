<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

echo "Name: ".$_GET["name"]."<br>";
echo "Name: ".$_GET["surname"];


?>

<body>
    <form action="" method="get">
        <input type="text" name="name">
        <input type="text" name="surname">
        <button>Click</button>
    </form>
</body>
</html>