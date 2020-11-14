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
    <title>TINH TIỀN KARAOKE</title>
</head>
<body>
<?php
        if(isset($_POST['txtGBD']))
            $gbd = trim($_POST['txtGBD']);
        else $gbd=0;
        if(isset($_POST['txtGKT']))  
            $gkt=trim($_POST['txtGKT']); 
        else $gkt=0;
        if(isset($_POST['btnTT']))
        if (is_numeric($gbd) && is_numeric($gkt))  
            if($gbd >=10 && $gkt <= 24 && $gkt > $gbd){
                if($gkt > 10 && $gkt < 17)
                    $tt = ($gkt - $gbd)* 20000;
                else {
                    $tt = ($gkt - $gbd)* 45000;
                }
            }
            else {
                echo "<font color='red'>Giờ bắt đầu phải hơn 10h || Giờ kết thúc phải lớn hơn giờ bắt đầu</font>";
                $tt="";
            }
        else {
            echo "<font color='red'>Vui lòng nhập vào số! </font>"; 
            $tt="";
        }
    else $tt=0;
    ?>

        <form align='center' action="" method="post">


        <table style="border: 1px solid black;margin-top: 20px; background-color: #99FFFF;" align='center' >

        <tr bgcolor="#009966">

            <th colspan="3" align="center"><h3><font color="red">Tình tiền KARAOKE</font></h3></th>

        </tr>

        <tr><td>Giờ bắt đầu: </td>

            <td><input type="text" name="txtGBD" value=" <?php echo $gbd;?> "/></td>
            <td>(h)</td>

        </tr>

        <tr><td>Giờ kết thúc: </td>

            <td><input type="text" name="txtGKT" value=" <?php echo $gkt;?>"/></td>
            <td>(h)</td>

        </tr>

        <tr><td>Tiền thanh toán:</td>

            <td><input type="text" name="thanhToan" disabled="disabled" value="<?php echo $tt;?>"/></td>
            <td>(VNĐ)</td>

        </tr>

        <tr>

            <td colspan="3" style="text-align: center;"><input type="submit" value="Tính tiền" name="btnTT" /></td>
            
            
        </tr>

        </table>
        </form>
        <?php # Script 3.4 - index.php
        $page_title = 'Welcome to this Site!';
        include ('..//includes/footer.html');
        ?>
</body>
</html>