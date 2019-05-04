<?php
    $poker = range(0,51);
    shuffle($poker);
    $players = array(array(),array(),array(),array());
    foreach ($poker as $i => $card){
        $players[$i % 4][(int)($i/4)] = $card;
    }
    ?>
<table border="1">
    <?php
        $suits = array("&spades;","<font color='red'>&hearts;</font>",
            "<font color='red'>&diams;</font>","&clubs;");  // 0, 1, 2, 3
        $values = array('A',2,3,4,5,6,7,8,9,10,'J','Q','K');
        foreach ($players as $player){
            sort($player);
            echo '<tr>';
            foreach ($player as $card){
                echo "<td>{$suits[(int)($card/13)]}{$values[$card%13]}</td>";
            }
            echo '</tr>';
        }
    ?>
</table>

