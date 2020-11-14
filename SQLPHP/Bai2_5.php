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
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="../includes/nen.css">
	<title>Bài 5</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<style>
	</style>
	<?php 
		$conn = mysqli_connect('localhost', 'root','','qlbansua');
		mysqli_set_charset($conn, 'UTF8');
		$rowsPerPage=10; //số mẩu tin trên mỗi trang, giả sử là 10
		if (!isset($_GET['page']))
		{ $_GET['page'] = 1;
		}
		//vị trí của mẩu tin đầu tiên trên mỗi trang
		$offset =($_GET['page']-1)*$rowsPerPage;
		//lấy $rowsPerPage mẩu tin, bắt đầu từ vị trí $offset
		$result = mysqli_query($conn, 'SELECT Ten_sua, Ten_hang_sua, Ten_loai, Trong_luong,
		Don_gia, Hinh
		 FROM sua,loai_sua,hang_sua
		 WHERE sua.Ma_loai_sua = loai_sua.Ma_loai_sua AND sua.Ma_hang_sua = hang_sua.Ma_hang_sua
		 LIMIT '. $offset . ', ' .$rowsPerPage);
		echo "<table align='center' width='700' border='1' cellpadding='2' cellspacing='2' style='bordercollapse:collapse;margin-top:20px'>";
		echo "<tr><th colspan='6' align='center' bgcolor='pink'>THÔNG TIN CÁC SẢN PHẨM</th></tr>";
		if(mysqli_num_rows($result)<>0)
		{ $stt=1;
		while($rows=mysqli_fetch_array($result))
		{ echo "<tr>";
		echo "<td  align='center'><img width = '100' height ='100' src='Hinh_sua/$rows[Hinh]'></td>";
		echo "<td>";
		echo "<p><b>$rows[Ten_sua]<br></b></p>";
		echo "Nhà SẢN XUẤT: $rows[Ten_hang_sua]<br>";
		echo "$rows[Ten_loai] - ";
		echo "$rows[Trong_luong] Gr - ";
		echo "$rows[Don_gia] VNĐ";
		echo "</td>";
        echo "</tr>";
		$stt+=1;
			}
		}
		echo"</table>";
		$re = mysqli_query($conn, 'select * from sua');
		//tổng số mẩu tin cần hiển thị
		$numRows = mysqli_num_rows($re);
		//tổng số trang
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