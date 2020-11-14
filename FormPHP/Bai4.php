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
    <title>Kết quả thi đại học</title>
    <style>
        td:first-of-type {
            text-align: left;
        }
    </style>
</head>
<body>  
<?php
            
            if(isset($_POST['toan']))  
        
                $toan=trim($_POST['toan']); 
        
            else $toan="";
        
            if(isset($_POST['ly']))  
        
                $ly=trim($_POST['ly']); 
        
            else $ly="";
        
            if(isset($_POST['hoa']))  
        
                $hoa=trim($_POST['hoa']); 
        
            else $hoa="";
        
            if(isset($_POST['DC']))  
        
                $DC=trim($_POST['DC']); 
        
            else $DC=20;
        
        
            if(isset($_POST['tinh']))
        
                if (is_numeric($toan) && is_numeric($ly) && is_numeric($hoa))  
        
                $tongdiem=$toan+$ly+$hoa;
        
                else {
        
                        echo "<font color='red'>Vui lòng nhập vào số! </font>"; 
        
                        $tongdiem="";
        
                    }
        
            else $tongdiem=0;

            if(isset($_POST['tinh']))
                    if($tongdiem >= $DC)
                    {
                        if(($toan > 0) && ($ly >0) && ($hoa >0))
                        {
                            $kq = "ĐẬU";
                        }
                        else $kq = "RỚT";
                    }
                    else $kq="RỚT";
            else $kq = "";
        
            ?>


    
        <form align='center' action="" method="post">


        <table style="border: 1px solid black;margin-top: 20px; background-color: pink;" align='center' >

        <tr bgcolor="yellow">

            <th colspan="3" align="center"><h3><font color="red">KẾT QUẢ THI ĐẠI HỌC</font></h3></th>

        </tr>

        <tr><td>Toán: </td>

            <td><input type="text" name="toan" value="<?php  echo $toan;?> "/></td>

        </tr>

        <tr><td>Lý: </td>

            <td><input type="text" name="ly" value="<?php  echo $ly;?> "/></td>
        

        </tr>
        <tr><td>Hóa: </td>

            <td><input type="text" name="hoa" value="<?php  echo $hoa;?> "/></td>
           

        </tr>
        <tr><td>Điểm chuẩn: </td>

            <td ><input type="text" name="DC" value="<?php  echo $DC;?>"/></td>
            
        </tr>

        <tr><td>Tổng điểm:</td>

            <td ><input type="text" name="tongdiem" disabled="disabled" value="<?php  echo $tongdiem;?> "/></td>
           
        </tr>
        <tr><td>Kết quả thi:</td>

            <td><input type="text" name="kq" disabled="disabled" value="<?php  echo $kq;?>"/></td>
           
        </tr>

        <tr>

            <td colspan="3" style="text-align: center;"><input type="submit" value="Xem kết quả" name="tinh" /></td>

        </tr>

        </table>
        </form>

        <?php # Script 3.4 - index.php
        $page_title = 'Welcome to this Site!';
        include ('..//includes/footer.html');
        ?>
</body>
</html>