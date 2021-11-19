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
    <br>
    <form action="request.php" method="post" >
        
        <input type="text" placeholder="Name" name="post_titel"> <br>
        <textarea name="post_inhalt" placeholder="Inhalt"></textarea> <br>
        <select name="post_kategorie" id=""> <br>
            <option value="1">Blumen</option>
            <option value="2">Technik</option>
            <option value="3">Gesundheit</option>
            

        </select>
        <input type="submit" name="new_post"value="Erstellen">
    </form>
</body>
</html>