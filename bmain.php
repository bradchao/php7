<?php
    include_once 'sql.php';
    include_once 'myconfig.php';
    spl_autoload_register(function ($class_name){
        require_once $class_name . '.php';
    });

    //
    if (isset($_REQUEST['delid'])){
        $delid = $_REQUEST['delid'];
        $sql = "DELETE FROM product WHERE id = {$delid}";
        $mysqli->query($sql);
    }else if (isset($_REQUEST['cloneid'])){
        $cloneid = $_REQUEST['cloneid'];
        $sql = "INSERT INTO product (pname,price,qty) " .
                "SELECT pname, price, qty FROM product WHERE id=?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("i", $cloneid);
        $stmt->execute();

        //echo htmlspecialchars($stmt->error) ;

    }

    $sql = 'select count(*) as `sum` from product';
    $result = $mysqli->query($sql);
    $data = $result->fetch_object();
    $total = $data->sum;

    $page = 1; $rpp = RPP;
    if (isset($_GET['page'])){
        $page = $_GET['page'];
    }
    $start = ($page - 1) * $rpp;

    $totalpage = ceil($total / $rpp);
    $prev = $page == 1? 1 : $page -1;
    $next = $page == $totalpage ? $page : $page+1;


    $sql = "SELECT * FROM product LIMIT {$start}, {$rpp}";
    $result = $mysqli->query($sql);


?>
<script>
    function confirmDelete(pname) {
        return confirm('Delete ' + pname + "?");
    }

    function changeColor() {
        var type = document.getElementById('seltype').selectedIndex;
        if (type == 0){
            document.getElementById("id_2").style.backgroundColor = 'yellow';
        }else if(type == 1){
            document.getElementById("id_2").style.backgroundColor = 'orange';
        }else if(type == 2){
            document.getElementById("id_2").style.backgroundColor = 'pink';
        }
    }

</script>

<a href="addProduct.php">Add New Product</a>
<hr />
Product List:<br />

<select id="seltype" onchange="changeColor()">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
</select>

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
            echo "<tr id='id_{$product->id}'>";
            echo "<td>{$product->id}</td>";
            echo "<td><a href='showPImage.php?id={$product->id}'>{$product->pname}</a></td>";
            echo "<td>{$product->price}</td>";
            echo "<td>{$product->qty}</td>";

            echo '<td>';
            echo "<a href='?delid={$product->id}' onclick='return confirmDelete(\"{$product->pname}\");'>Del</a>";
            echo " | <a href='editProduct.php?editid={$product->id}'>Update";
            echo " | <a href='?cloneid={$product->id}'>Copy</a>";
            echo '</td>';

            echo '</tr>';
        }
    ?>
</table>

<a href="?page=<?php echo $prev; ?>">Prev</a> | <a href="?page=<?php echo $next; ?>">Next</a>
