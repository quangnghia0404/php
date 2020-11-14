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
                border: solid 1px;
                width: 250px;
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
            background-color: cadetblue;
        }
        #submit{
            margin-left:650px;
            margin-top: 20px;
            width: 250px;
            height: 40px;
        }
     


</style>
<body>
    <?php
        function tinh_nam($nam)
        {
            
            if ($nam %400 ==0 || ($nam %4==0 && $nam %100 <> 0))
            return 1;
            else 
            return 0;
        }

        if (isset($_POST["tinh"]))
        {
            $nam =$_POST["nam"];
            $kq = "";
            
            foreach (range(2000,$nam)as $year)
            {
                if(tinh_nam($year))
                {
                    $kq = $kq . $year . " ";
                }
               
               
            }
            if ($kq !="")
            {
                $kq = $kq. " Đây Là Năm Nhuận";
            }
            else
                $kq = "Không có năm nhuận";
        }
        else
        {
            $nam = 0;
            $kq = "";
           
        } 
      
        
    ?>

    <form action="Bai3.php" method ="post">
    <table  >
<tr bgcolor="grey">

    <td colspan="4" align="center"><h3><font color="blue">TÍNH NĂM ÂM LỊCH</font></h3></td>

</tr>

<tr>
    <td colspan="2"  >Năm</td>
    <td >
        <input type="text " id="" size="40" name="nam" value="<?php echo $nam; ?>">
    </td>
</tr>

<tr>
    
    <td colspan="4">
        <p style="background-color: bisque;"><?php echo $kq ?></p>
    </td> 
    
</tr>

<tr id="submit">
    
    <td colspan="4" ><input  type="submit"   value="Tìm Năm Nhuận" name="tinh" /></td> 
    
</tr>


</table>

</form>

<?php # Script 3.4 - index.php
        $page_title = 'Welcome to this Site!';
        include ('..//includes/footer.html');
        ?>
</body>
</html>