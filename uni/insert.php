<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=	, initial-scale=1.0">
    <title>Add Uni</title>
    <?php include("../includes/head.php");?>
</head>
<body>
    <?php
    
        if($_POST){
            $titel=$_POST["titel"];
            echo $titel;
        };
    
    ?>
    <div class="container">
        <h3>Add Uni</h3>
        <div class="col-md-6">
        <form method="post">
            <div class="form-group">
                <label >Universty Name</label>
                <input type="text" class="form-control mt-3" name="titel"  placeholder="Enter Uni Name">
            </div>
         
            <button type="submit" class="btn btn-primary mt-3">Save</button>
            <a href="index.php" class="btn btn-danger mt-3">Cancel</a>
        </form>
        </div>
    </div>
    
</body>
</html>