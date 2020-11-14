<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php # Script 3.4 - login.php

        session_start();
        if( !isset($_SESSION["user"]) || $_SESSION["user"] == -1){
            header("location:login.php");
        }
        ?>
       
        <?php # Script 3.4 - index.php
        $page_title = 'Welcome to this Site!';
        include ('includes/header.php');
        ?>

        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'webmau');
        mysqli_set_charset($conn, 'UTF8');
                   
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $oldPassword = $_POST['oldPassword'];
            $newPassword = $_POST['newPassword'];
            $confirmPassword = $_POST['confirmPassword'];
            $oldPassword = md5($oldPassword);
            $newPassword = md5($newPassword);
            $confirmPassword = md5($confirmPassword);
            $query = mysqli_query($conn, "SELECT username, password FROM users WHERE username='$username' AND password='$oldPassword' ");
            $num = mysqli_fetch_array($query);
            if ($num > 0) {
                $con = mysqli_query($conn, "UPDATE users  set password = '$newPassword' WHERE username='$username'" );
                $_SESSION["thongbao"] = "Password thay đổi thành công";
                header("location:login.php");
            } else {
                $_SESSION["thongbao"] = "Password thay đổi không thành công";
            }
        }
        ?>
        
<h3 align="center">CHANGE PASSWORD</h3>
<div style="text-align: center;"><?php if( isset($_SESSION["thongbao"])){
            echo $_SESSION["thongbao"];
            session_unset();
        } ?></div>


<form method="post" action="" align="center">
    UserName:<br>
    <input style="text-align: center;" type="text" name="username" disabled value="<?php echo $_SESSION["username"];?>" readonly>
    <br>
    Old Password:<br>
    <input type="password" name="oldPassword">
    <br>
    New Password:<br>
    <input type="password" name="newPassword">
    <br>
    Confirm Password:<br>
    <input type="password" name="confirmPassword"><span id="confirmPassword" class="required"></span>
    <br><br>
    <input type="submit" name="submit">
</form>
<br>
<br>

     

<?php
        include ('includes/footer.html');
        ?>
        
</body>
</html>