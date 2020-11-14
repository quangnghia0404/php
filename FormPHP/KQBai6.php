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
    <title>Kết quả phép tính</title>
</head>
<body>
    <?php
        $first = $_POST["txtSTN"];
        $second = $_POST["txtSTH"];
        $ptinh = $_POST["ptinh"];
        if($_POST['ptinh'] == "cong") {
            $ptinh = "Cộng";
            $kq = $first + $second;
        }
        else if($_POST['ptinh'] == "tru") {
            $ptinh = "Trừ";
            $kq = $first - $second;
        }
        else if($_POST['ptinh'] == "nhan") {
            $ptinh = "Nhân";
            $kq = $first * $second;
        }
        else if($_POST['ptinh'] == "chia") {
            $ptinh = "Chia";
            $kq = $first / $second;
        }
    ?>
    <table align="center">
        <tr>
            <th colspan="5" align="center"><h3><font color="blue">PHÉP TÍNH TRÊN HAI SỐ</font></h3></th>
        </tr>
        <tr>
            <td style="color:red;">Chọn phép tính:</td>
            <td style="color:#FFCC99;"><?php echo $ptinh; ?></td>
        </tr>
        <tr></tr>
        <tr>
            <td style="color:blue;">Số thứ nhất:</td>
            <td ><input type="text" name="txtSTN" disabled="disabled" value="<?php echo $first;?>"/></td>
        </tr>
        <tr>
            <td style="color:blue;">Số thứ hai:</td>
            <td><input type="text" name="txtSTH" disabled="disabled" value="<?php echo $second;?>"/></td>
        </tr>
        <tr>
            <td style="color:blue;">Kết quả:</td>
            <td><input type="text" name="KetQua" disabled="disabled" value="<?php echo $kq;?>"/></td>
        </tr>
        <tr>
            <td><a href="javascript:window.history.back(-1);">Trở về trang trước</a></td>
        </tr>
    </table>

    <?php # Script 3.4 - index.php
        $page_title = 'Welcome to this Site!';
        include ('..//includes/footer.html');
        ?>
</body>
</html>