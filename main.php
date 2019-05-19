<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<?php
    include_once 'sql.php';
    spl_autoload_register(function ($class_name){
        require_once $class_name . '.php';
    });
    session_start();

    if (!isset($_SESSION['member'])) header('Location: login.php');
    $member = $_SESSION['member'];
    $cart = $_SESSION['cart'];

    $icon = base64_encode($member->icon);

    $sql = "SELECT * FROM product ORDER BY qty";
    $result = $mysqli->query($sql);
?>
Welcome, <?php echo $member->name; ?>
<hr />
<img src="data:image/jpeg;base64,<?php echo $icon;?>" />
<hr />
<table border="1" width="100%">
    <tr>
        <th>id</th>
        <th>PNAME</th>
        <th>Price</th>
        <th>Num</th>
        <th>Confirm</th>
    </tr>

    <script>
        function addProduct(pid) {
            var num = $('#num_' + pid).val();
            $.get("addCart.php?pid=" + pid + "&num=" + num, function (data, status) {
                alert(status);
            });
        }
    </script>


    <?php
    while ( $product = $result->fetch_object("Product") ){
        echo "<tr>";
        echo "<td>{$product->id}</td>";
        echo "<td><a href='showPImage.php?id={$product->id}'>{$product->pname}</a></td>";
        echo "<td>{$product->price}</td>";

        $num = $cart->getItemNum($product->id);

        echo "<td><input type='number' id='num_{$product->id}' value='{$num}'></td>";

        echo '<td>';
        echo "<input type='button' onclick='addProduct({$product->id})' value='Update'>";
        echo '</td>';

        echo '</tr>';
    }
    ?>
</table>
<a href="checkpage.php">Check</a>

