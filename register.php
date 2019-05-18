<?php
    include_once 'sql.php';

    if (isset($_REQUEST['account'])){
        $account = $_REQUEST['account'];
        $passwd = $_REQUEST['passwd'];
        $name = $_REQUEST['name'];

        $passwd = password_hash($passwd, PASSWORD_DEFAULT);

        $icon = null;
        if ($_FILES['icon']['error'] == 0){
            $icon = addslashes(file_get_contents($_FILES['icon']['tmp_name']));
        }

        $sql = "INSERT INTO member (account,passwd,`name`,icon) " .
            "VALUES ('{$account}','{$passwd}','{$name}','{$icon}')";
        if ($mysqli->query($sql)){
            header('Location: login.php');
        }else{
            echo 'ERROR:' . $sql;
        }


    }
?>
<script>
    var xhttp = new XMLHttpRequest();
    var isOk;
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200){
            if (xhttp.responseText != 0){
                document.getElementById('mesg').innerHTML = '帳號已被使用';
                isOk = false;
            }else{
                document.getElementById('mesg').innerHTML = '帳號可以使用';
                isOk = true;
            }

        }
    } 

    function isNewAccount() {
        var account = document.getElementById('account').value;

        xhttp.open("GET", "isNewAccount.php?account=" + account, true);
        xhttp.send();
    }

    function isSubmit() {
        return isOk;
    }

</script>


<form method="post" enctype="multipart/form-data" onsubmit="return isSubmit();">
    Account: <input type="text" id="account" name="account" onchange="isNewAccount()"/>
    <span id="mesg"></span>
    <br />
    Password: <input type="password" name="passwd" /><br />
    Real Name: <input type="text" name="name" /><br />
    Icon: <input type="file" name="icon" /><br />
    <input type="submit" value="New" />
</form>