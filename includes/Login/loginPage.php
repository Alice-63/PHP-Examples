


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="newResult.php" method="get">
        <input name="benutzername" type="text" placheholder="Benutzername">
        <input name="email" type="text" placheholder="Email">
        <input name="pass" type="text" placheholder="Passwort">
     
        <input name="" type="submit" value="Click">
    </form>
    <?php

        if(isset($_GET["emailFehler"])&& $_GET["emailFehler"]=="1")
        {
            echo "<div>Email existiert bereits!</div>";
        }

    ?>

</body>
</html>