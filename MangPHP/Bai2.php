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
                font-weight:blod;
                width: 130px;
                height: 30px;
                background-color: aqua;
            }
        h3 {
           
            text-align:center;
            font-size: 25px;
            margin-top:10px;
        }
        table{
            margin-top: 50px;
            margin-left:350px;
        }
      


</style>
<body>

<?php
        if(isset($_POST['dl']))
            $dl = $_POST['dl'];
        else $dl = "";
        $mang_can = array("Quý","Giáp","Ất","Bính","Đinh","Mậu","Kỉ","Canh","Tân","Nhâm");
        $mang_chi = array("Hợi","Tý","Sửu","Dần","Mão","Thìn","Tỵ","Ngọ","Mùi","Thân","Dậu","Tuất");
        $mang_hinh = array("hoi.jpg","chuot.jpg","suu.jpg","dan.jpg","meo.jpg","thin.jpg","ty.jpg","ngo.jpg","mui.jpg","than.jpg","dau.jpg","tuat.jpg");
        $can = 0;
        $chi = 0;
        $hinh = 0;
        $hinh_anh = "";
        if(isset($_POST['ok']))
            if(is_numeric($dl)){
                $dl = $dl -3;
                $can = $dl % 10;
                $chi = $dl % 12;
                $al = $mang_can[$can] ." ". $mang_chi[$chi];
                $dl = $dl +3;
                $hinh = $mang_hinh[$chi];
                $hinh_anh = "<img src='images/$hinh'>";
            }
            else {
                echo "<font color='red'>Vui lòng nhập vào số! </font>";
                $al = "";
            }
        else 
        $al = "";
            
    ?>
<form action="Bai2.php" method ="post" enctype="multipart/form-data">

<table >
<tr bgcolor="grey">

    <th colspan="4" align="center"><h3><font color="blue">TÍNH NĂM ÂM LỊCH</font></h3></th>

</tr>

<tr>
    <td colspan="2"  >Năm Dương Lịch</td>
    <td></td>
    <td colspan="2"   >Năm Âm Lịch</td>
    

</tr>   
<tr>
    <td colspan="2">
        <label for=""></label>
        <input type="text " id="" size="40" name="dl" value="<?php echo $dl; ?>">
        
    </td>
    <td ><input type="submit"  value="=>" name="ok" /></td> 
    <td colspan="2">
        <label for=""></label>
        <input type="text " id="" size="40" name="al" value="<?php echo $al; ?>">
    </td> 
</tr>
<tr>
                <td colspan="4" align="center"><?php echo $hinh_anh; ?></td>
            </tr>

</table>

</form>

<?php # Script 3.4 - index.php
        $page_title = 'Welcome to this Site!';
        include ('..//includes/footer.html');
        ?>
</body>
</html>