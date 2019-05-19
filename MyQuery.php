<?php
class MyQuery {
    private $mysqli;
    const QUERY_PNAME = 'pname';
    const QUERY_PRICE = 'price';
    const QUERY_QTY = 'qty';

    function __construct($mysqli){
        $this->mysqli = $mysqli;
    }

    function getProductData($pid, $field){
        $sql = "SELECT * FROM product WHERE id = $pid";
        $result = $this->mysqli->query($sql);
        if ($result->num_rows == 0){
            return false;
        }else{
            $data = $result->fetch_assoc();
            return $data[$field];
        }
    }

    function getAllPid($where = ''){
        $sql = "SELECT id FROM product";
        if (strlen($where)>0){
            $sql .= " WHERE {$where}";
        }
        $sql .= " ORDER BY id";

        $result = $this->mysqli->query($sql);
        $ret = [];
        while ( $row = $result->fetch_object()){
            $ret[] = $row->id;
        }
        return $ret;
    }

}

?>