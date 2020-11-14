<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
</head>
<style>
    body{background: url(https://devforum.info/DEMO/LoginForm1/bg.jpg);
        background-size: cover; 
    }

</style>
<body>
<?php
    session_start();
    $_SESSION["user"] = -1;

    include 'ketnoi.php';
    if(isset($_POST['submit']) && $_POST['username'] != '' && $_POST['password'] != ''){
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = md5($password);

        $conn = mysqli_connect('localhost', 'root', '', 'webmau');
        mysqli_set_charset($conn, 'UTF8');
    
        $sql = "select * from users where username = '$username' and password = '$password'" ;
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)<>0)
        { 
            while($rows=mysqli_fetch_array($result))
            { 
                $_SESSION["user"]= $rows[5];
            }
            $_SESSION["username"]= $username;
            $_SESSION["email"] = $email;
        }

       
    }
    else
    {
        header("location:login.php");
    }
    if($_SESSION["user"] == 1){
        header("location:admin/index.php");
    }
    
    else if ($_SESSION["user"] == -1){
        $_SESSION["user"] = '<script language = "javascript">alert("Bạn đã nhập sai username hoặc password. Vui lòng kiểm tra lại!!")</script>';
        header("location:login.php");
    }
    else{
        header("location:index.php");
    }

?>
</body>
</html>
