

<?php
session_start();
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
    if ($username == 'admin' && $password == '123') {
        $_SESSION['user'] = $username;
        header("location:mainpage.php");
    } else {
        echo "Sai mật khẩu. Vui lòng nhập lại";
        require "login.html";
    }
 
?>