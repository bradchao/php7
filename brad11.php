<?php
$x = $y = $result = '';
if (isset($_GET['x'])){
    $x = $_GET['x'];
    $y = $_GET['y'];
    $result = $x + $y;
}
?>
<form action="brad11.php" method="get">
    <input type="text" name="x" value="<?php echo $x; ?>"/>
    <select name="op">
        <option value="1">+</option>
        <option value="2">-</option>
        <option value="3">x</option>
        <option value="4">/</option>
    </select>
    <input type="text" name="y" value="<?php echo $y; ?>" />
    <input type="submit" value="="/>
    <?php echo $result; ?>
</form>