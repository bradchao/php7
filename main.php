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

    <?php
    while ( $product = $result->fetch_object("Product") ){
        echo "<tr>";
        echo "<td>{$product->id}</td>";
        echo "<td><a href='showPImage.php?id={$product->id}'>{$product->pname}</a></td>";
        echo "<td>{$product->price}</td>";

        $num = $cart->getItemNum($product->id);

        echo "<td><input name='num' value='{$num}'></td>";

        echo '<td>';
        echo 'Update';
        echo '</td>';

        echo '</tr>';
    }
    ?>
</table>

