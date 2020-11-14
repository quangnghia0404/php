<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="sheet/bootstrap.css">
	<link rel="stylesheet" href="sheet/ionicons.min.css">
	<link rel="stylesheet" href="sheet/mine.css">
	<script src="javascript/myscript.js"></script>
    <title>Bài tập Mảng</title>
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

<h2 style="text-align: center;">Bài Tập Mảng</h2>
      <div id='demo' style="margin-left: 600px;margin-top: 20px;">
        <ul>
            <li><a href="MangPHP/Bai1.php" >Bài Tập Thực Hành 1</a></li>
            <li><a href="MangPHP/Bai2.php">Bài Tập Thực Hành 2</a></li>
            <li><a href="MangPHP/Bai3.php">Bài Tập Thực Hành 3</a></li>
            <li><a href="MangPHP/Bai4.php">Bài Tập Thực Hành 4</a></li>
            <li><a href="MangPHP/Bai5.php">Bài Tập Thực Hành 5</a></li>
            <li><a href="MangPHP/Bai6.php">Bài Tập Thực Hành 6</a></li>
            <li><a href="MangPHP/Bai7.php">Bài Tập Thực Hành 7</a></li>
            <li><a href="MangPHP/Bai8.php">Bài Tập Thực Hành 8</a></li>
            <li><a href="MangPHP/Bai9.php">Bài Tập Thực Hành 9</a></li>
            <li><a href="MangPHP/Bai10.php">Bài Tập Thực Hành 10</a></li>
        </ul>
    </div>
    <div>
        <?php 
            if(isset($_GET['page']) && $_GET['page'] == "$_REQUEST[page]")
            {
                include "MangPHP/$_REQUEST[page].php";
            }
        ?>
    </div>


</div>
<?php
        include ('includes/footer.html');
        ?>

    
</body>
</html>