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
</head>
<style>

        td{
                text-align:center;
                
                width: 100px;
                height: 30px;
            }
        h3 {
            color :red;
            text-align:center;
            font-size: 25px;
            margin-top:10px;
        }
        table{
            margin-top: 50px;
            margin-left:500px;
            background-color: aqua;
        }
       
      
     


</style>
<body>
    <?php
       
        if (isset($_POST["tinhtong"]))
        {
            $tong = 0;
            $ds = $_POST["ds"];

            $arr = explode(",", $ds);

            $n = count($arr);

          
            for ($i = 0; $i < $n; $i++)
            {
                $tong = $tong + $arr[$i];   
            }
        } 
        else
        {
            $ds = "";
            $tong = "";
        }



        
    ?>
    <form action="Bai4.php" method ="post">
    <table  >
    <tr bgcolor="grey">
    
        <td colspan="4" align="center"><h3><font color="white">TÍNH TRÊN DÃY SỐ</font></h3></td>
    
    </tr>
    
    <tr>
        <td colspan="2"  >Nhập Dãy Số</td>
        <td >
            <input type="text " id="ds" size="40" name="ds" value="<?php echo $ds; ?>">
        </td>
        <td style="color: red;">(*)</td>
    </tr>
    <tr id="submit">
        
        <td colspan="3" ><input  type="submit"   value="Tổng Dãy Số" name="tinhtong" /></td> 
        
    </tr>
    <tr>
        <td colspan="2"  >Tổng Dãy Số</td>
        <td >
            <input type="text " id="tong" size="40" name="tong" value="<?php echo $tong;?>">
        </td>
    </tr>
    <tr>

    <td colspan="4">
        <p style="background-color: bisque;">(*) CÁC SỐ NGĂN CÁCH NHAU BỞI DẤU ","</p>
    </td> 
    </tr>

    </table> 
    </form>

    <?php # Script 3.4 - index.php
        $page_title = 'Welcome to this Site!';
        include ('..//includes/footer.html');
        ?>
</body>
</html>