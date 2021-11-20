
<?php
include("header.php");

?>

    <main>
    <h1>Konto Erstellen</h1>
    <form action="login.php" method="get">
        <input name="benutzername" type="text" placeholder="Benutzername">
        <input name="email" type="text" placeholder="Email">
        <input name="passwort" type="text" placeholder="Passwort">
     
        <input name="" type="submit" value="Click">
    </form>
    <?php

        if(isset($_GET["emailFehler"])&& $_GET["emailFehler"]=="1")
        {
            echo "<div>Email oder Benutzername existiert bereits!</div>";
        }

    ?>
    </main>
<?php
include("sidebar.php");
include("footer.php");

?>