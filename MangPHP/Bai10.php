
<?php # Script 3.4 - login.php

session_start();
if( !isset($_SESSION["user"]) || $_SESSION["user"] == -1){
    header("location:login.php");
}
?>
<?php # Script 3.4 - index.php
        $page_title = 'Welcome to this Site!';
        include ('..//includes/header.php');
        ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../includes/nen.css">
    <title>Mảng Hoa</title>
</head>
<body>
    <?php

    function tim_Hoa($ten_hoa,$mang_hoa){
        $n = count($mang_hoa);
        $kq = 0;
        for ($i =0 ; $i<$n ; $i++)
        {
            if(strcasecmp($ten_hoa,$mang_hoa[$i])==0)
            {
                $kq =1;
         }
        }
        return $kq;
    }
   
    if (isset($_POST["ten_hoa"]))
    {
        $ten_hoa = $_POST["ten_hoa"];
        $mang_hoa = array();
         
        $mang_hoa = explode("---",trim($_POST["gio_hoa"]));
        $n = count($mang_hoa);

        if (tim_Hoa($ten_hoa,$mang_hoa)==1)
            $kq = "Đã có hoa <b>$ten_hoa</b> trong giỏ";       
        else{
            $mang_hoa[$n] = $ten_hoa;
            $kq = "Thêm thành công hoa $ten_hoa vào giỏ !";
        }
            
        
        $gio_hoa = implode("---",$mang_hoa);  
    }
    else{
        $ten_hoa ="";
        $mang_hoa ="";
        $gio_hoa ="";
        $kq ="";
        
    }
     ?>
<form action="Bai10.php" method ="post">
        <table style="margin-top: 20px;margin-left: 400px;">     
        <tr bgcolor="pink">
        
            <td colspan="4" align="center"><h3><font color="white">Mua Hoa</font></h3></td>
        </tr>
        <tr>
            <td colspan="2" style="color: red;font-weight: bold" >Loại Hoa Bạn Chọn: </td>
            <td >
                <input type="text" size="40" name="ten_hoa" value="<?php echo $ten_hoa?>">
            </td>
            <td>
                <input type="submit" value="Thêm Vào Giỏ" name="submit" />
            </td> 
        </tr>
        <tr>
            <td colspan="3" style="color: red;font-weight: bold" >Giỏ Hoa Bạn Đang Có: </td>
            <td><?php echo $kq ?></td>
        </tr>   
       
        
        <tr>
            <td colspan="2"></td>
            <td >
            <textarea name="gio_hoa" rows="5" cols="40"><?php echo $gio_hoa; ?></textarea>
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