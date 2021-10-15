<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shopping Cart</title>
    <style>
        table
        {
            width: 600px;
            font-size:35px
        }
    </style>
</head>
<body>

<?php session_start();
print_r($_SESSION)?>
<table border="1">
    <thead>
        <th>Product Name</th>
        <th>Price</th>
        <th>Count</th>
        <th>Total</th>
        <th>[Del]</th>
    </thead>
    <tbody>
    <?php foreach ($_SESSION["productList"] as $product){?>
        <tr>
            <td><?php echo $product["product_name"]?></td>
            <td><?php echo $product["product_count"]?></td>
            <td><?php echo $product["product_price"]?></td>
            <td><?php echo $product["product_price"]*$product["product_count"]?></td>
            <td><a href="#">Del</a></td>
            <?php} ?>
        </tr>
        
    </tbody>
</table>
    
</body>
</html>