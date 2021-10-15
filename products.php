<?php

if($_GET){

    session_start();

    $product=array(
        "product_name"=> $_GET("product"),
        "product_count"=> $_GET("count"),
        "product_price"=> $_GET("price")
    )
}



?>
<form action="products.php">
 <fieldset>
     <h3>Order Form</h3>
     <label for="products">Products List</label>
    <select name="product" id="products">

        <option value="bildschrim" name="" id="">Bildschrim</option>
        <option value="laptop" name="" id="">Laptop</option>
        <option value="macbook" name="" id="">Macbook</option>
        <option value="mouse" name="" id="">Mouse</option>
    </select>
    <input type="text" name="price" placeholder="Count" value="1">
    <input type="text" name="count"  placeholder="Price" value="1500">
    <button type="submit">Add</button>
 </fieldset>
</form>