<?php


echo $_POST["personelAdi"]. "<br/>". $_POST["email"];


?>

<form action="index.php" method="POST">
    <input type="text" name="personelAdi">
    <input type="text" name="email" id="">
    <button type="submit">Gönder</button>
</form>