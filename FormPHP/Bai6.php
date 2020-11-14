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
    <title>Thực hiện phép tính</title>
</head>
<body>
    <?php
        if(isset($_POST['txtSTN']))
            $first = trim($_POST['txtGBD']);
        else $first=0;
        if(isset($_POST['txtSTH']))  
            $second=trim($_POST['txtSTH']); 
        else $second=0;
    ?>
    <form action="KQBai6.php" method="POST">
        <table align="center" style="margin-top: 20px;">
            <tr>
                <th colspan="5" align="center"><h3><font color="blue">PHÉP TÍNH TRÊN HAI SỐ</font></h3></th>
            </tr>
            <tr>
                <td style="color:red;">Chọn phép tính:</td>
                <td style="color:#FFCC99;">Cộng<input type="radio" name="ptinh" value="cong" /></td>
                <td style="color:#FFCC99;">Trừ<input type="radio" name="ptinh" value="tru" /></td>
                <td style="color:#FFCC99;">Nhân<input type="radio" name="ptinh" value="nhan" /></td>
                <td style="color:#FFCC99;">Chia<input type="radio" name="ptinh" value="chia" /></td>
            </tr>
            <tr></tr>
            <tr>
                <td style="color:blue;">Số thứ nhất:</td>
                <td colspan="4"><input type="text" name="txtSTN" value="<?php echo $first;?>"/></td>
            </tr>
            <tr>
                <td style="color:blue;">Số thứ hai:</td>
                <td colspan="4"><input type="text" name="txtSTH" value="<?php echo $second;?>"/></td>
            </tr>
            <tr>
                <td colspan = "2" align="center"><input type="submit" name="btnTinh" value="Tính"/></td>
            </tr>
        </table>
    </form>
    <?php # Script 3.4 - index.php
        $page_title = 'Welcome to this Site!';
        include ('..//includes/footer.html');
        ?>
</body>
</html>