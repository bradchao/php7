<?php
    include 'bradutil.php';

    $result = $hist = '';
    if (!isset($_POST['guess'])){
        // init
        $answer = createAnswer(3);
        //echo $answer;
    }else{
        $guess = $_POST['guess'];
        $answer = $_POST['answer'];
        $hist = $_POST['hist'];
        $result = checkAB($guess, $answer);

        $hist .= "{$guess} => {$result}<br>";

    }
?>
<form method="post">
    Guess Number: <input type="number" name="guess" />
    <input type="hidden" name="answer" value="<?php echo $answer; ?>">
    <input type="hidden" name="hist" value="<?php echo $hist; ?>">
    <input type="submit" value="Guess">
    <?php echo $result; ?>
</form>
<hr />
<?php
    echo $hist;
?>
