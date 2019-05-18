<?php
    if (!isset($_GET['account'])) die();

    include_once 'sql.php';

    $account = $_GET['account'];
    $sql = "SELECT * FROM member WHERE account = '{$account}'";
    $result = $mysqli->query($sql);

    echo $result->num_rows;

?>