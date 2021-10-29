<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("head.php")?>
</head>

<div class="container">
<div class="row">
    <div class="col-6">
    <form action="ergebnis.php" method="get">
    <div class="form-group">
    <h3>Aktion</h3>
        <select class="form-control form-control-sm" name="aktion" id="">
            <option value="+">Addieren +</option>
            <option value="*">Multiplizieren *</option>
            <option value="-">Subtrahieren -</option>
            <option value="/">Dividieren /</option>
        </select>
   <input class="form-control form-control-sm" name="zahl1" type="text" placeholder="Zahl 1">
   <input class="form-control form-control-sm" name="zahl2" type="text" placeholder="Zahl 2">

   <button class="btn btn-primary">Rechnen</button>
    </div>
</form>
    </div>
</div>
</div>
</body>
</html>