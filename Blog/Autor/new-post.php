<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Neue Kategorie erstellen:
    <form action="request.php" method="post" style="display:flex;flex-direction:column">
        <input type="text" placeholder="Name" name="kat_name">
        <textarea name="post_inhalt" placeholder="Inhalt"></textarea>
        <input type="submit" value="Ertellen">
    </form>
</body>
</html>