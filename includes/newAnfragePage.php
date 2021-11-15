

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="newAnfrage.php">
    <input name="name" type="text">    
    <input name="surname" type="text">
    <input type="submit" name="" value="Anruffen">
    </form>
    <?php
        if(isset($_GET["pwFalsch"])&& $_GET["pwFalsch"]==1)
        {
            echo "Pass ist Falsch";
        };
        if(isset($_GET["emailFalsch"])&& $_GET["emailFalsch"]==1)
        {
            echo "Pass ist Falsch";
        }

    ?>
</body>
</html> 