<?php
    include_once 'sql.php';
    spl_autoload_register(function ($class_name){
        require_once $class_name . '.php';
    });

    //
    if (isset($_REQUEST['delid'])){
        $delid = $_REQUEST['delid'];
        $sql = "DELETE FROM product WHERE id = {$delid}";
        $mysqli->query($sql);
    }


    $sql = "SELECT * FROM product";
    $result = $mysqli->query($sql);


?>
<script>
    function confirmDelete(pname) {
        return confirm('Delete ' + pname + "?");
    }
</script>

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
            echo "<td><a href='showPImage.php?id={$product->id}'>{$product->pname}</a></td>";
            echo "<td>{$product->price}</td>";
            echo "<td>{$product->qty}</td>";

            echo '<td>';
            echo "<a href='?delid={$product->id}' onclick='return confirmDelete(\"{$product->pname}\");'>Del</a>";

            echo '</td>';

            echo '</tr>';
        }
    ?>
</table>