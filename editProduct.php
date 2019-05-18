<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    include_once 'sql.php';
    spl_autoload_register(function ($class_name){
        require_once $class_name . '.php';
    });
    session_start();


    if (isset($_GET['editid'])){
        $id = $_GET['editid'];
        $sql = "SELECT * FROM product WHERE id = {$id}";
        $result = $mysqli->query($sql);
        $product = $result->fetch_object("Product");
        $_SESSION['product'] = $product;
    }else if (isset($_SESSION['product']) && isset($_REQUEST['pname'])){
        $product = $_SESSION['product'];
        $pname = $_POST['pname'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        $sql = "UPDATE product SET pname='{$pname}', price='{$price}', qty={$qty} WHERE id={$product->id}";
        //echo $sql;
        $mysqli->query($sql);
        unset($_SESSION['product']);
        header("Location: bmain.php");
    }else{
        echo 'debug';
    }

?>


<form method="post" action="?" enctype="multipart/form-data">
    PName: <input type="text" name="pname" value="<?php echo $product->pname; ?>"/><br />
    Price: <input type="text" name="price" value="<?php echo $product->price; ?>" /><br />
    Qty.: <input type="text" name="qty" value="<?php echo $product->qty; ?>" /><br />
    <input type="submit" value="Update" />
</form>
