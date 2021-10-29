<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<form action="ergebnis.php" method="get">
    <h3>Aktion</h3>
   <select name="aktion" id="">
       <option value="+">Addieren +</option>
       <option value="*">Multiplizieren *</option>
       <option value="-">Subtrahieren -</option>
       <option value="/">Dividieren /</option>
   </select>
   <input name="zahl1" type="text" placeholder="Zahl 1">
   <input name="zahl2" type="text" placeholder="Zahl 2">

   <button>Rechnen</button>
</form>
</body>
</html>