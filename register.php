<script>
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200){
            if (xhttp.responseText != 0){
                document.getElementById('mesg').innerHTML = '帳號已被使用';
            }else{
                document.getElementById('mesg').innerHTML = '帳號可以使用';
            }

        }
    } 

    function isNewAccount() {
        var account = document.getElementById('account').value;

        xhttp.open("GET", "isNewAccount.php?account=" + account, true);
        xhttp.send();
    }

</script>


<form method="post" enctype="multipart/form-data">
    Account: <input type="text" id="account" name="account" onchange="isNewAccount()"/>
    <span id="mesg"></span>
    <br />
    Password: <input type="password" name="passwd" /><br />
    Real Name: <input type="text" name="name" /><br />
    Icon: <input type="file" name="icon" /><br />
    <input type="submit" value="New" />
</form>