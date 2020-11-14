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
    <title>Bài tập Form</title>
    <style>
        body{
        background-image: url(../img/a.png);
        }
    </style>
</head>
<body>
            
        <?php # Script 3.4 - login.php

session_start();
if( !isset($_SESSION["user"]) || $_SESSION["user"] == -1){
    header("location:login.php");
}
?>
>
<?php # Script 3.4 - index.php
$page_title = 'Welcome to this Site!';
include ('includes/header.php');
?>
        <h2 style="text-align: center;">Bài Tập Form</h2>
      <div id='demo' style="margin-left: 600px;margin-top: 20px;">
        <ul>
            <li><a href="FormPHP/Bai1HCN.php" >Bài Tập Thực Hành 1</a></li>
            <li><a href="FormPHP/Bai2HT.php">Bài Tập Thực Hành 2</a></li>
            <li><a href="FormPHP/Bai3.php">Bài Tập Thực Hành 3</a></li>
            <li><a href="FormPHP/Bai4.php">Bài Tập Thực Hành 4</a></li>
            <li><a href="FormPHP/Bai5.php">Bài Tập Thực Hành 5</a></li>
            <li><a href="FormPHP/Bai6.php">Bài Tập Thực Hành 6</a></li>
            <li><a href="FormPHP/Bai7-1.php">Bài Tập Thực Hành 7</a></li>
        </ul>
    </div>
    <div>
        <?php 
            if(isset($_GET['page']) && $_GET['page'] == "$_REQUEST[page]")
            {
                include "FormPHP/$_REQUEST[page].php";
            }
        ?>
    </div>


</div>
<?php
        include ('includes/footer.html');
        ?>

    
</body>
</html>