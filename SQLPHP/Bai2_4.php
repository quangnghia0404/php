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
        #b{
            text-align: center;
        }
      
</style>
</head>
<body>
<?php
    $conn = mysqli_connect('localhost', 'root', '', 'qlbansua');
        mysqli_set_charset($conn, 'UTF8');
        $rowsPerPage=5; //số mẩu tin trên mỗi trang, giả sử là 10
        if (!isset($_GET['page']))
        { $_GET['page'] = 1;
        }
        //vị trí của mẩu tin đầu tiên trên mỗi trang
        $offset =($_GET['page']-1)*$rowsPerPage;
        //lấy $rowsPerPage mẩu tin, bắt đầu từ vị trí $offset
        $result = mysqli_query($conn, 'SELECT Ma_sua, Ten_sua,Ten_loai,Ten_hang_sua,Trong_luong,Don_gia 
        FROM sua,loai_sua,hang_sua 
        WHERE sua.Ma_hang_sua = hang_sua.Ma_hang_sua AND sua.Ma_loai_sua = loai_sua.Ma_loai_sua
         LIMIT '. $offset . ', ' .$rowsPerPage);

    echo "<p align='center'><font size='5'> THÔNG TIN SỮA</font></P>";
    echo "<table id='t01' align='center' width='700' border='1' cellpadding='2' cellspacing='2' style='bordercollapse:collapse'>";
    echo '<tr>
    <th width="50" style="color:red">STT</th>
    <th width="150" style="color:red">Mã sữa</th>
    <th width="200" style="color:red">Tên sữa</th>
    <th width="200" style="color:red">Tên loại sữa</th>
    <th width="200" style="color:red">Tên hãng sữa</th>
    <th width="200" style="color:red">Trọng lượng</th>
    <th width="200" style="color:red">Đơn giá</th>
    </tr>';
    if(mysqli_num_rows($result)<>0)
    { $stt=1;
    while($rows=mysqli_fetch_array($result))
    { echo "<tr>";
    echo "<td >$stt</td>";
    echo "<td >$rows[Ma_sua]</td>";
    echo "<td>$rows[Ten_sua]</td>";
    echo "<td>$rows[Ten_loai]</td>";
    echo "<td>$rows[Ten_hang_sua]</td>";
    echo "<td>$rows[Trong_luong]</td>";
    echo "<td>$rows[Don_gia]</td>";
    echo "</tr>";
    $stt+=1;
    }//while
    }
    echo"</table>";

        if(mysqli_num_rows($result)<>0)
        {
        //hiển thị dữ liệu
        }
        echo"</table>";
        $re = mysqli_query($conn, 'select * from sua');
        //tổng số mẩu tin cần hiển thị
        $numRows = mysqli_num_rows($re);

        $maxPage = floor($numRows/$rowsPerPage) + 1;
        echo '<p style="align-items: center;
        text-align: center;">';
        //tạo link tương ứng tới các trang
        for ($i=1 ; $i<=$maxPage ; $i++)
        { 
            if ($i == $_GET['page'])
        { 
            echo '<b>'.$i.'</b> '; //trang hiện tại sẽ được bôi đậm
                            }
        else
        echo "<a  href=" .$_SERVER['PHP_SELF']. "?page="
        .$i.">".$i."</a> ";
        }
        echo '</p>';

?>

<?php # Script 3.4 - index.php
        $page_title = 'Welcome to this Site!';
        include ('..//includes/footer.html');
        ?>
</body>
</html>