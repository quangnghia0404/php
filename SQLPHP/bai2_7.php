<?php # Script 3.4 - login.php

session_start();
if( !isset($_SESSION["user"]) || $_SESSION["user"] == -1){
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../includes/nen.css">
    <title>Document</title>
    
</head>

<body>
    <h1>THONG TIN SAN PHAM</h1>
    <div class="wrapper">
    <?php
     $connection = mysqli_connect('localhost', 'root', '', 'qlbansua');
     mysqli_set_charset($connection, 'UTF8');
     $rowsPerPage = 10; //số mẩu tin trên mỗi trang, giả sử là 10
    if (!isset($_GET['page']))
    { 
        $_GET['page'] = 1;
    }
    //vị trí của mẩu tin đầu tiên trên mỗi trang
    $offset =($_GET['page']-1)*$rowsPerPage;

    //$sql='SELECT Ten_sua, Ten_hang_sua, Ten_loai, Trong_luong, Don_gia FROM sua, hang_sua, loai_sua WHERE sua.Ma_hang_sua = hang_sua.Ma_hang_sua AND sua.Ma_loai_sua = loai_sua.Ma_loai_sua LIMIT '.$offset. ', '.$rowsPerPage;
     $result = mysqli_query($connection, "SELECT Ten_sua, Trong_luong, Don_gia, Hinh, Ma_sua FROM sua LIMIT $offset, $rowsPerPage");

        while($rows = mysqli_fetch_array($result)){
            echo "
            <div class='container'>
                <div class='items'>
                    <a href='detail.php?id=$rows[4]'>
                        <h3>$rows[0]</h3>
                    </a>
                    <p>$rows[1]g - $rows[2] VND - $rows[4]</p>
                    <img src='../Hinh_sua/$rows[3]' alt=''>
                </div>
            </div>";
    }
?>
    </div>
    <div class="paging">
    <?php
    // $rowsPerPage = 5; //số mẩu tin trên mỗi trang, giả sử là 10
    // if (!isset($_GET['page']))
    // { 
    //     $_GET['page'] = 1;
    // }
    // //vị trí của mẩu tin đầu tiên trên mỗi trang
    // $offset =($_GET['page']-1)*$rowsPerPage;

    // $sql='SELECT Ten_sua, Ten_hang_sua, Ten_loai, Trong_luong, Don_gia FROM sua, hang_sua, loai_sua WHERE sua.Ma_hang_sua = hang_sua.Ma_hang_sua AND sua.Ma_loai_sua = loai_sua.Ma_loai_sua LIMIT '.$offset. ', '.$rowsPerPage;


    $re = mysqli_query($connection, 'select * from sua');
    //tổng số mẩu tin cần hiển thị
    $numRows = mysqli_num_rows($re);
    //tổng số trang
    $maxPage = floor($numRows/$rowsPerPage) + 1;
    echo '<p>';
    if ($_GET['page'] > 1)
    { 
        echo "<a href=" .$_SERVER['PHP_SELF']."?page=".($_GET['page']-1).">Back</a> ";
    }else{
        echo "Back ";
    }    //tạo link tương ứng tới các trang
    for ($i=1 ; $i<=$maxPage ; $i++)
    { 
        if ($i == $_GET['page'])
        { 
            echo '<b> '.$i.'</b> '; //trang hiện tại sẽ được bôi đậm
        }
        else
        {
            echo "<a href=" .$_SERVER['PHP_SELF']. "?page=".$i.">".$i."</a> ";
        }
        
    }
    if ($_GET['page'] < $maxPage)
    { 
        echo "<a href=". $_SERVER['PHP_SELF']."?page=".($_GET['page']+1).">Next</a>";
    }
    else{
        echo "Next";
    }
    echo '</p>';
?>
    </div>
    <?php # Script 3.4 - index.php
        $page_title = 'Welcome to this Site!';
        include ('..//includes/footer.html');
        ?>
</body>
</html>