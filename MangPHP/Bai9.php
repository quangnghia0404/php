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
    <title>Bài 9</title>
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
</head>
<body>
    <?php
         if (isset($_POST["tinhtong"]))
         {   

            
             $ds = $_POST["ds"];
             $_arr = explode(",", $ds);
       

             $ds1 = $_POST["ds1"];
             $_arr1 = explode(",", $ds1);
    

             $ds3 = array_merge($_arr,$_arr1);
             $_arr2 = implode(",", $ds3);


            $dem = count($_arr);
            $dem2 = count($_arr1);

           
            sort($ds3);
            $sapxep = implode(",",$ds3);

            rsort($ds3);
            $sapxep2 = implode(",",$ds3);

            
         }
         else
         {
             $ds = "";
             $ds1 = "";
             $_arr2 = "";
             $dem = "";
             $dem2 = "";
             $sapxep = "";
             $sapxep2 = "";
         }
         
 



    ?>
        <form action="Bai9.php" method ="post">
            <table  >
            <tr bgcolor="pink">
            
                <td colspan="4" align="center"><h3><font color="white">SẮP XẾP MẢNG</font></h3></td>
            
            </tr>
            
            <tr>
                <td colspan="2"  > Mảng A: </td>
                <td >
                    <input type="text " id="ds" size="40" name="ds" value="<?php echo $ds; ?>">
                </td>
                <td style="color: red;">(*)</td>
            </tr>
            <tr>
                <td colspan="2"  > Mảng B: </td>
                <td >
                    <input type="text " id="ds" size="40" name="ds1" value="<?php echo $ds1; ?>">
                </td>
                <td style="color: red;">(*)</td>
            </tr>
            
            <tr id="submit">
                
                <td colspan="3" ><input  type="submit"   value="Thực hiện  " name="tinhtong" /></td> 
                
            </tr>
            <tr>
                <td colspan="2"  >Số phần tử mảng A: </td>
                <td >
                    <input type="text " id="tong" size="20" name="dem" value="<?php echo $dem; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2"  >Số phần tử mảng B: </td>
                <td >
                    <input type="text " id="tong" size="20" name="dem2" value="<?php echo $dem2; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2"  >Mảng C: </td> 
                <td >
                    <input type="text " id="tong" size="40" name="ds3" value="<?php echo $_arr2; ?>">
                </td>
            </tr>
        
            <tr>
                <td colspan="2"  >Mảng C Tăng dần: </td>
                <td >
                    <input type="text " id="tong" size="40" name="sapxep" value="<?php echo $sapxep; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2"  >Mảng C Giảm dần: </td>
                <td >
                    <input type="text " id="tong" size="40" name="sapxep2" value="<?php echo $sapxep2; ?>">
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