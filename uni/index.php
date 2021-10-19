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
<?php include("../includes/db.php");




?>
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
                    <?php
                    $rows=$db->query("SELECT * FROM tbl_uni", PDO::FETCH_ASSOC);

                    foreach($rows as $row){?>
                      
                    

                    <tr>
                       
                        <td><?php echo $row["titel"];?></td>
                        <td>
                        <a href="delete.php?id=<?php echo $row["id"]?>">[Del]</a>
                        <a href="update.php?id=<?php echo $row["id"]?>">[Edit]</a></td>
                    </tr>
                    <?php } ?>
                 </tbody>
            </table>
            <a href="insert.php" class="btn btn-success">Uni Add</a>
        </div>
    </div>
</div>
    
</body>
</html>