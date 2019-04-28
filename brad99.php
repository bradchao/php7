<table border="1" width="100%">
    <?php
        define("LINES", 2);
        define("LINE0FROM", 1);
        define("LINE0TO", 5);

        for ($k=0; $k<LINES; $k++){
            echo '<tr>';
            for ($j=LINE0FROM; $j<=LINE0TO; $j++){
                $newj = $j + $k * (LINE0TO-LINE0FROM+1);
                echo '<td>';
                for ($i = 1; $i<=9; $i++){
                    $r = $newj * $i;
                    echo "{$newj} x {$i} = {$r}<br>";
                }
                echo '</td>';
            }
            echo '</tr>';
        }
    ?>
</table>