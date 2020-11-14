<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Bootstrap Example</title>
    <link rel="stylesheet" href="includes/a.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>


<body>

    <div class="container">
        <h2 style="color: blueviolet;">My WebSite</h2>
        <hr color="purple" width="170px" style="float: left;">
        <marquee><h3>
        <?php 
           if (isset($_SESSION['user'])){
               echo 'Xin chào: '.$_SESSION['username']."!! ^^";
               // echo 'Click vào đây để <a href="dangxuat.php">Đăng xuất</a>';
               if(( $_SESSION["user"]) == 1)
               {
                   echo ' (admin)';
               }
               else
               {
                echo ' (user)'; 
               }
           }
           else{
               echo "Bạn chưa đăng nhập";
           }
           ?>
          </h3> </marquee>
        <hr >
        <ul class="nav nav-pills bg-dark">
            <li class="nav-item">
                <a class="nav-link active" href="http://localhost:8080/WebMau/index.php">Trang chủ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="http://localhost:8080/WebMau/changepassword.php">Thay đổi mật khẩu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost:8080/WebMau/viewuser.php">Danh Sách USer</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Bài Tập</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="http://localhost:8080/WebMau/upload.php">Bài tập Form PHP</a>
                    <a class="dropdown-item" href="http://localhost:8080/WebMau/upload2.php">Bài Tập Mảng PHP</a>
                    <a class="dropdown-item" href="http://localhost:8080/WebMau/upload3.php">Bài Tập Hướng Đối Tượng PHP</a>
                    <a class="dropdown-item" href="http://localhost:8080/WebMau/upload4.php">Bài TậpSQL PHP</a></div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Liên Hệ</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#">Nội dung khác</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="http://localhost:8080/WebMau/admin/index.php">Quản lí</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="logout.php">Đăng xuất</a>
            </li>
        </ul>
    </div>
    <div id="content">
        <!-- Start of the page-specific content. -->
        <!-- Script 9.1 - header.html -->