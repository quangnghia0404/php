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
    <title>Document</title>

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
<?php
    $conn = mysqli_connect('localhost', 'root', '', 'qlbansua');
    mysqli_set_charset($conn, 'UTF8');
    $sql="select Ma_khach_hang,ten_khach_hang,Phai,Dia_chi,Dien_thoai,Email from khach_hang";
    $result = mysqli_query($conn, $sql);
    echo "<p align='center'><font size='5'> THÔNG TIN KHÁCH HÀNG</font></P>";
    echo "<table id='t01' align='center' width='700' border='1' cellpadding='2' cellspacing='2' style='bordercollapse:collapse'>";
    echo '<tr>
    <th width="50" style="color:red">STT</th>
    <th width="50" style="color:red">Mã khách hàng</th>
    <th width="150" style="color:red">Tên khách hàng</th>
    <th width="200" style="color:red">Phái</th>
    <th width="200" style="color:red">Địa chỉ</th>
    <th width="200" style="color:red">Điện thoại</th>
    </tr>';
    if(mysqli_num_rows($result)<>0)
    { $stt=1;
    while($rows=mysqli_fetch_array($result))
    { echo "<tr>";
    echo "<td >$stt</td>";
    echo "<td >$rows[Ma_khach_hang]</td>";
    echo "<td>$rows[ten_khach_hang]</td>";
    if($rows["Phai"]==1)
                    {
                        echo "<td><img src='Hinh_sua/a.jpg'></td>";
                    }
                    elseif($rows["Phai"]==0)
                    {
                        echo "<td><img src='Hinh_sua/2.png'></td>";
                    }
    echo "<td>$rows[Dia_chi]</td>";
    echo "<td>$rows[Dien_thoai]</td>";
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