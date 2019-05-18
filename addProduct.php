<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    include_once 'sql.php';

    if (isset($_REQUEST['pname'])){
        $pname = $_REQUEST['pname'];
        $price = $_REQUEST['price'];
        $qty = $_REQUEST['qty'];
        $sql = "INSERT INTO product (pname,price,qty) VALUES ('{$pname}','{$price}',$qty)";
        $mysqli->query($sql);

        $newid = $mysqli->insert_id;

        if (isset($_FILES['pimg'])){
            $pimg = $_FILES['pimg']; $n = 1;
            foreach ($pimg['error'] as $i => $errno){
                if ($errno == 0){
                    copy($pimg['tmp_name'][$i], "pimgs/p_{$newid}_{$n}.jpg");
                    $n++;
                }
            }
        }

    }



?>


<form method="post" enctype="multipart/form-data">
    PName: <input type="text" name="pname" /><br />
    Price: <input type="text" name="price" /><br />
    Qty.: <input type="text" name="qty" /><br />
    Image1 : <input type="file" name="pimg[]" /><br />
    Image2 : <input type="file" name="pimg[]" /><br />
    Image3 : <input type="file" name="pimg[]" /><br />
    Image4 : <input type="file" name="pimg[]" /><br />
    Image5 : <input type="file" name="pimg[]" /><br />
    <input type="submit" value="Add" />
</form>
