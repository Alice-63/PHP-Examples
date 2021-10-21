<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notebook</title>
    <?php include("../includes/head.php")?>
</head>
<body>
<?php
try{
    $db=new PDO("mysql:host=localhost;dbname=notbook;charset=utf8","root","");
}catch(PDOExpection $e){
    echo $e->getMessage();
};

$rows=$db->query("SELECT * FROM tbl_info", PDO::FETCH_ASSOC);

?>





    <div class="container">
       <div class="row">
            <h3 class="m-2">Person List <a href="" class="btn btn-primary">Add</a></h3>
        </div>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Lastname</th>
                <th>Web</th>
                <th>E-Mail</th>
                <th>Phone</th>
                <th>Facebook</th>
                <th>Twitter</th>
                <th>Note</th>
                <th>Birthday</th>
                <th>Adress</th>
            </thead>
            <tbody>
                <?php foreach($rows as $row){?>
                <tr>
                    <td><?php echo $row["id"]?></td>
                    <td><?php echo $row["name"]?></td>
                    <td><?php echo $row["lastname"]?></td>
                    <td><?php echo $row["web"]?></td>
                    <td><?php echo $row["email"]?></td>
                    <td><?php echo $row["phone"]?></td>
                    <td><?php echo $row["facebook"]?></td>
                    <td><?php echo $row["twitter"]?></td>
                    <td><?php echo $row["note"]?></td>
                    <td><?php echo $row["birthday"]?></td>
                    <td><?php echo $row["adress"]?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>