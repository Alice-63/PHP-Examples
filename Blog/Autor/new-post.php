<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Neue Beitrag erstellen:
    <form action="request.php" method="post" style="display:flex;flex-direction:column">
        
        <input type="text" placeholder="Name" name="post_titel">
        <textarea name="post_inhalt" placeholder="Inhalt"></textarea>
        <input type="submit" name="new_post"value="Erstellen">
    </form>
</body>
</html>