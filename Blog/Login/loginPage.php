


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Konto Erstellen</h1>
    <form action="login.php" method="get">
        <input name="benutzername" type="text" placeholder="Benutzername">
        <input name="email" type="text" placeholder="Email">
        <input name="pass" type="text" placeholder="Passwort">
     
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