<style>
    form
    {
        text-align:center;
        font-size:25px
    }
    input, button,select{
        font-size:25px;
        font-weight:bold
    }
</style>

<?php

if($_GET){

    session_start();

    $product=array(
        "product_name"=> $_GET["product"],
        "product_count"=> $_GET ["count"],
        "product_price"=> $_GET["price"]
    );
    
    $_SESSION["productList"][$_GET["product"]]=$product;
    header("location:basket.php");
};





?>
<form action="products.php">
 <fieldset>

    <button type="submit">Add</button>
 </fieldset>
</form>