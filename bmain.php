<?php
    include_once 'sql.php';
    spl_autoload_register(function ($class_name){
        require_once $class_name . '.php';
    });

    $sql = "SELECT * FROM product";
    $result = $mysqli->query($sql);


?>

<a href="addProduct.php">Add New Product</a>
<hr />
Product List:<br />
<table border="1" width="100%">
    <tr>
        <th>id</th>
        <th>PNAME</th>
        <th>Price</th>
        <th>Qty.</th>
        <th>Del | Update | Copy</th>
    </tr>

    <?php
        while ( $product = $result->fetch_object("Product") ){
            echo '<tr>';
            echo "<td>{$product->id}</td>";
            echo "<td>{$product->pname}</td>";
            echo "<td>{$product->price}</td>";
            echo "<td>{$product->qty}</td>";
            echo '</tr>';
        }
    ?>
</table>