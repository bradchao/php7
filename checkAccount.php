<?php
    include_once 'sql.php';
    include_once 'Member.php';

    session_start();

    $account = $_REQUEST['account'];$passwd = $_REQUEST['passwd'];
    $sql = "SELECT * FROM member WHERE account=?";

    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $account);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows > 0){
        $member = $result->fetch_object("Member");
        if (password_verify($passwd, $member->passwd)){
            $_SESSION['member'] = $member;
            $_SESSION['cart'] = new Cart();
            header('Location: main.php');
        }else{
            header('Location: login.php');
        }

    }else{
        header('Location: login.php');
    }
?>