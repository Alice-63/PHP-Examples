<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("head.php")?>
</head>
<body class="bg bg-success">
<div class="container-fluid ">
<div class="row justify-content-md-center  ">
    <div class="col-md-2" >
        <form  action="ergebnis.php" method="get">
        <h2 class="mt-3 mb-3">Taschenrechner</h2>
            <select class="form-control form-control-lg" name="aktion" id="">   
                <option value="+">Addieren +</option>
                <option value="*">Multiplizieren *</option>
                <option value="-">Subtrahieren -</option>
                <option value="/">Dividieren /</option>
            </select>
            <input required class="form-control form-control-lg mt-3" name="zahl1" type="text" placeholder="Zahl 1">
            <input required class="form-control form-control-lg mt-3" name="zahl2" type="text" placeholder="Zahl 2">

            <button  class="btn btn-warning btn-lg btn-block mt-3 w-100 form-control">Rechnen</button>
    
    
        </form>
    </div>
</div>
</div>
</body>
</html>