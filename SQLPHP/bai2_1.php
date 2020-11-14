           
        <?php # Script 3.4 - login.php

session_start();
if( !isset($_SESSION["user"]) || $_SESSION["user"] == -1){
    header("location:login.php");
}
?>

<?php # Script 3.4 - index.php
        $page_title = 'Welcome to this Site!';
        include ('..//includes/header.php');
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../includes/nen.css">
    <link rel="stylesheet" href="sheet/bootstrap.css">
	<link rel="stylesheet" href="sheet/ionicons.min.css">
	<link rel="stylesheet" href="sheet/mine.css">
	<script src="javascript/myscript.js"></script>
    <title>Document</title>
</head>
<body>
<?php
    $conn = mysqli_connect('localhost', 'root', '', 'qlbansua');
    mysqli_set_charset($conn, 'UTF8');
    $sql="select Ma_sua,ten_sua,Trong_luong,Don_gia,Loi_ich from sua";
    $result = mysqli_query($conn, $sql);
    echo "<p align='center'><font size='5'> THÔNG TIN SỮA</font></P>";
    echo "<table align='center' width='700' border='1' cellpadding='2' cellspacing='2' style='bordercollapse:collapse'>";
    echo '<tr>
    <th width="50">STT</th>
    <th width="50">Mã sữa</th>
    <th width="150">Tên sữa</th>
    <th width="200">Trọng lượng</th>
    <th width="200">Đơn giá</th>
    <th width="200">Lợi ích</th>
    </tr>';
    if(mysqli_num_rows($result)<>0)
    { $stt=1;
    while($rows=mysqli_fetch_array($result))
    { echo "<tr>";
    echo "<td>$stt</td>";
    echo "<td>$rows[Ma_sua]</td>";
    echo "<td>$rows[ten_sua]</td>";
    echo "<td>$rows[Trong_luong]</td>";
    echo "<td>$rows[Don_gia]</td>";
    echo "<td>$rows[Loi_ich]</td>";
    echo "</tr>";
    $stt+=1;
    }//while
    }
    echo"</table>";
?>

<?php # Script 3.4 - index.php
        $page_title = 'Welcome to this Site!';
        include ('..//includes/footer.html');
        ?>
</body>
</html>