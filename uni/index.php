<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("../includes/head.php");?>
</head>
<body>

<div class="container">
    <h3>Universty List</h3>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-bordered table-striped table-hover">
                <thead class="text-center">
                    <th style="width:50px">RegID</th>
                    <th>Uni Name</th>
                    <th>Prodecurus</th>
                </thead>
                <tbody  class="text-center">
                    <tr>
                        <td>1</td>
                        <td>Mainz Uni</td>
                        <td>
                        <a href="#">[Del]</a>
                        <a href="#">[Edit]</a></td>
                    </tr>
                 </tbody>
            </table>
            <button class="btn btn-success">Uni Add</button>
        </div>
    </div>
</div>
    
</body>
</html>