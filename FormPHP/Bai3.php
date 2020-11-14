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
    <title>THANH TOÁN TIỀN ĐIỆN</title>
    <style>
        td:first-of-type {
            text-align: left;
        }
    </style>
</head>
<body>
    <?php
            
	if(isset($_POST['tch']))  

        $tch=trim($_POST['tch']); 

    else $tch="";

    if(isset($_POST['csc']))  

        $csc=trim($_POST['csc']); 

    else $csc=0;

    if(isset($_POST['csm']))  

        $csm=trim($_POST['csm']); 

    else $csm=0;

    if(isset($_POST['DG']))  

        $DG=trim($_POST['DG']); 

    else $DG=2000;


        if(isset($_POST['tinh']))

        if (is_numeric($csc) && is_numeric($csm))  

        $dientich=($csm-$csc)* $DG;

        else {

                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 

                $dientich="";

            }

    else $dientich=0;


    ?>
        <form align='center' action="" method="post">
        <table style="border: 1px solid black; margin-top: 20px;background-color: pink;" align='center' >

        <tr bgcolor="yellow">

            <th colspan="3" align="center"><h3><font color="red">THANH TOÁN TIỀN ĐIỆN</font></h3></th>

        </tr>

        <tr><td>Tên chủ hộ: </td>

            <td><input type="text" name="tch" value=" <?php  echo $tch;?>"/></td>

        </tr>

        <tr><td>Chỉ số cũ: </td>

            <td><input type="text" name="csc" value=" <?php  echo $csc;?>"/></td>
            <td>(Kw)</td>

        </tr>
        <tr><td>Chỉ số mới: </td>

            <td><input type="text" name="csm" value=" <?php  echo $csm;?>"/></td>
            <td>(Kw)</td>

        </tr>
        <tr><td>Đơn giá: </td>

            <td><input type="text" name="DG" value="<?php  echo $DG;?> "/></td>
            <td>(VNĐ)</td>
        </tr>

        <tr><td>Số tiền thanh toán:</td>

            <td><input type="text" name="dientich" disabled="disabled" value="<?php  echo $dientich;?> "/></td>
            <td>(VNĐ)</td>
        </tr>

        <tr>

            <td colspan="3" style="text-align: center;"><input type="submit" value="Tính" name="tinh" /></td>

        </tr>

        </table>
        </form>

        <?php # Script 3.4 - index.php
        $page_title = 'Welcome to this Site!';
        include ('..//includes/footer.html');
        ?>
</body>
</html>