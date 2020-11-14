
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
    <link rel="stylesheet" href="includes/a.css">
    <title>Bai 1</title>
</head>
<body>
    <?php
         
        if(isset($_POST['n']))
            $n = $_POST['n'];
        else $n = 0;    
        $_arr = [];
            for($i = 0; $i < $n;$i++){
                $_arr[$i] = rand(-100,100);
            }
        //câu a :
        $abc = implode(" ",$_arr);
        //câu b:
        $dem = 0;
        foreach ($_arr as $value){
            if($value % 2 == 0)
            $dem++;
        }
        //câu c:
        $dem100 = 0;
        foreach ($_arr as $value){
            if($value  < 100)
            $dem100++;
        }
        //câu d:
        $tongam = 0;
        foreach($_arr as $value){
        if($value < 0)
        $tongam += $value;
        }
        //câu f:
        $sapxep = $_arr;
        asort($sapxep);
        //câu e:


    ?>
    <pre>
    <form action="" method="POST">
                
        <table border="1 " cellpadding="0" align='center'>
        
        <tr bgcolor="yellow">

            <th colspan="3" align="center"><h3><font color="red">MẢNG VÀ CHUỖI</font></h3></th>

        </tr>
        <tr>

            <td>Nhập n:</td>

            <td><input type="text" name="n" size= "30" value=" <?php  echo $n;?>"/></td>

        </tr>
        <tr>


             <td colspan="3" style="text-align: center;"><input type="submit" size="20" value=" Mảng phát sinh "/></td>

        </tr>
        <tr>

            <td>Mảng:</td>

            <td><input type="text" name="abc" size= "70" disabled="disabled" value="<?php  echo $abc;?> "/></td>

        </tr>
        <tr>

            <td>Đếm giá trị chẵn:</td>

            <td><input type="text" name="diem" size= "70" disabled="disabled" value="<?php  echo $dem;?> "/></td>

        </tr>
        <tr>

            <td>Đếm giá trị nhỏ hơn 100:</td>

            <td><input type="text" name="diem100" size= "70" disabled="disabled" value="<?php  echo $dem100;?> "/></td>

        </tr>
        <tr>

            <td>Tổng âm:</td>

            <td><input type="text" name="tongam" size= "70" disabled="disabled" value="<?php  echo $tongam;?> "/></td>

        </tr>
        <tr>

            <td>In vị trí giá trị = 0:</td>

            <td><input type="text" name="sapxep" size= "70" disabled="disabled" value="<?php  echo implode(" ", array_keys($_arr, 0));?> "/></td>

        </tr>
        <tr>

            <td>Sắp xếp:</td>

            <td><input type="text" name="sapxep" size= "70" disabled="disabled" value="<?php  echo implode(" ", $sapxep);?> "/></td>

        </tr>
        </table>
    </form>
    </pre>

    <?php # Script 3.4 - index.php
        $page_title = 'Welcome to this Site!';
        include ('..//includes/footer.html');
        ?>
</body>
</html>