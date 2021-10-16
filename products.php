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
     <h2>Order Form</h2>
     <label for="products"><h3>Products List</h3></label><br>
    <select name="product" id="products">

        <option value="Bildschrim" name="" id="">Bildschrim</option>
        <option value="Laptop" name="" id="">Laptop</option>
        <option value="Macbook" name="" id="">Macbook</option>
        <option value="Mouse" name="" id="">Mouse</option>
        <option value="Notebook" name="" id="">Notebook</option>
        <option value="Keyboard" name="" id="">Keyboard</option>
    </select>
    <input type="text" name="price" placeholder="Count" >
    <input type="text" name="count"  placeholder="Price" >
    <button type="submit">Add</button>
 </fieldset>
</form>