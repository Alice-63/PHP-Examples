<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shopping Cart</title>
</head>
<body>

<?php session_start();?>
<table border="1">
    <thead>
        <th>Product Name</th>
        <th>Price</th>
        <th>Count</th>
        <th>Total</th>
        <th>[Del]</th>
    </thead>
    <tbody>
    <?php foreach ($_SESSION[productList] as $product)?>
        <tr>
            <td><?php $_SESSION[?></td>
            <td><?php session_start();?></td>
            <td><?php session_start();?></td>
            <td><?php session_start();?></td>
            <td>Del</td>
        </tr>
    </tbody>
</table>
    
</body>
</html>