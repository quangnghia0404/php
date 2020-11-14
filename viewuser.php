<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="sheet/bootstrap.css">
    <link rel="stylesheet" href="sheet/mine.css">
    <title>Danh Sách Users</title>


    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }
        #t01 tr:nth-child(even) {
        background-color: #FFCC66;
        }
        #t01 tr:nth-child(odd) {
        background-color: #fff;
        }

</style>
</head>
<body>
            <?php # Script 3.4 - login.php

            session_start();
            if( !isset($_SESSION["user"])){
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
    $sql="select * from users";
    $result = mysqli_query($conn, $sql);    

    ?>

             
<div class="infor">

<table  width="900" border="1px solid #f3f3f3;" align="center" style="margin-top: 10px; text-align: center;" >
<h2 style="margin-top: 10px; text-align: center;">Danh Sách Users</h2>
    <tr style="text-align: center;color:red">
        
        <th width="50px;">username</th>
        <th width="200px;">email</th>
        <th width="200px;">full name</th>
        <th width="200px;">Ảnh</th>
    </tr>
<?php while ($row = mysqli_fetch_array($result)) {
# code...
?>
    <tr>
      
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['fullname']; ?></td>
        <td><img src="./admin/img/<?php echo $row['anh']; ?>" style="max-width: 100px;"></td>
       
    </tr>
<?php } ?>
</table>

        <?php
        include ('includes/footer.html');
        ?>
</body>
</html>