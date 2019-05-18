<script>
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200){
            document.getElementById('mesg').innerHTML = xhttp.responseText;
        }
    } 

    function isNewAccount() {
        var account = document.getElementById('account').value;

        xhttp.open("GET", "isNewAccount.php", true);
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