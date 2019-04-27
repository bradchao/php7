<?php
$x = $y = $result = '';
if (isset($_GET['x'])){
    $x = $_GET['x'];
    $y = $_GET['y'];
    $result = $x + $y;
}
?>
<form action="brad04.php" method="get">
    <input type="text" name="x" value="<?php echo $x; ?>"/>
    <select>
        <option>+</option>
        <option>-</option>
        <option>x</option>
        <option>/</option>
    </select>
    <input type="text" name="y" value="<?php echo $y; ?>" />
    <input type="submit" value="="/>
    <?php echo $result; ?>
</form>