<?php
    function isTWId($id) {
        $ret = false;
        if (preg_match("/^[A-Z][12][0-9]{8}$/", $id)){
            $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
            $c1 = substr($id, 0, 1);    // 'A'
            $n12 = strpos($letters, $c1) + 10;
            $n1 = (int)($n12 / 10);
            $n2 = $n12 % 10;
            $n3 = substr($id, 1,1);
            $n4 = substr($id, 2,1);

        }
        return $ret;
    }

?>