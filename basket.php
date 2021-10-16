<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shopping Cart</title>
    <style>
        body
        {
            display:flex;
            justify-content:center;
            flex-direction:column;
        }
        table
        {
            width: 100%;
            font-size:35px;
            border-collapse:collapse;
            text-align:center;
        }
        th,td{
            padding:5px
        }

    </style>
</head>
<body>

<?php session_start();
if($_GET){

    unset($_SESSION["productList"][$_GET["del"]]);
    header("location:basket.php");
    
}

include "products.php";


?>
<hr>
<table border="1">
    <thead>
        <th>Product Name</th>
        <th>Price</th>
        <th>Count</th>
        <th>Total</th>
        <th>[Del]</th>
    </thead>
    <tbody>
    <?php foreach ($_SESSION["productList"] as $product) {?>
        <tr>
            <td><?php echo $product["product_name"]?></td>
            <td><?php echo $product["product_count"]?></td>
            <td><?php echo $product["product_price"]?></td>
            <td><?php echo $product["product_price"]*$product["product_count"]?></td>
            <td><a href="http://localhost/PHP/basket.php?del=<?php echo $product["product_name"]?>">Del</a></td>
           
        </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>