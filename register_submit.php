<?php
    session_start();
    include 'ketnoi.php';
    if(isset($_POST['submit']) && $_POST['username'] != '' && $_POST['password'] != '' && $_POST['confirmpassword'] != ''
    && $_POST['email'] != '' && $_POST['fullname'] != ''){
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmpassword= $_POST['confirmpassword'];
        if( $password != $confirmpassword){
            $_SESSION["thongbao"] ='<script language = "javascript">alert
            ("Password nhập lại không chính xác")</script>';
            
            header("location:register.php");
            die();
        }
       
        $email = $_POST['email'];
        $sql1 = "SELECT * FROM users WHERE email ='$email' ";
        $old1 = mysqli_query($conn,$sql1);
        if( mysqli_num_rows($old1) >0 )
        {
            $_SESSION["thongbao"] = '<script language = "javascript">alert
            ("Email đã tồn tại")</script>';
            header("location:register.php");
            die();
        }

        $fullname = $_POST['fullname'];
        $level = 0;

        $sql = "SELECT * FROM users WHERE username ='$username' ";
        $old = mysqli_query($conn,$sql);
        $password = md5($password);
        if( mysqli_num_rows($old) >0 )
        {
            $_SESSION["thongbao"] = '<script language = "javascript">alert
            ("Username đã tồn tại")</script>';;
            header("location:register.php");
            die();
        }
        $sql = "INSERT INTO users (username,password,email,fullname,level) VALUE ('$username','$password','$email','$fullname','$level')" ;
        mysqli_query($conn,$sql);
        $_SESSION["thongbao"] = '<script language = "javascript">alert
        ("Đăng ký thành công")</script>';
        header("location:login.php");

    }else
    {   
        $_SESSION["thongbao"] = '<script language = "javascript">alert
        ("Vui lòng nhập đầy đủ thông tin")</script>';
        header("location:register.php");
    }

?>