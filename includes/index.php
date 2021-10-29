<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taschenrechner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg bg-success">
<div class="container-fluid ">
<div class="row justify-content-md-center  ">
    <div class="col-md-2" >
        <form  action="ergebnis.php" method="get">
        <h2 class="mt-3 mb-3 text-warning">Taschenrechner</h2>
            <select class="form-control form-control-lg" name="aktion" id="">   
                <option value="+">Add +</option>
                <option value="*">Mult *</option>
                <option value="-">Sub -</option>
                <option value="/">Div /</option>
            </select>
            <input required class="form-control form-control-lg mt-3" name="num1" type="text" placeholder="Number 1">
            <input required class="form-control form-control-lg mt-3" name="num2" type="text" placeholder="Number 2">

            <button  class="btn btn-warning btn-lg btn-block mt-3 w-100 form-control">Calculate</button>
    
    
        </form>
    </div>
</div>
</div>
</body>
</html>