<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === "admin" && $password === "123")
    {
        echo "<font color=red> Welcome to :".$username."<font><br>";
        echo "<font color=red >Mật khẩu là :".$password."<font>";
    }
    else
    {
        echo "<font color=red>Username hoặc password không chính xác. Vui lòng nhập lại<font>";
    }
?>