
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
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">

<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>tinh dien tich HCN</title>

</head>
        <style>
            body {
    background-image: url(../img/a.png);
}
        </style>
<body>

<?php 

	if(isset($_POST['chieudai']))  

	    $chieudai=trim($_POST['chieudai']); 

	else $chieudai= "";

	if(isset($_POST['chieurong'])) 

	    $chieurong=trim($_POST['chieurong']); 

	else $chieurong="";

	if(isset($_POST['tinh']))

        if (is_numeric($chieudai) && is_numeric($chieurong))  

	       $dientich=$chieudai * $chieurong;

        else {

                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 
                $dientich="";
            }

    else $dientich=0;


?>



<form align='center' action="" method="post">

<table border="0" style="margin-left: 600px;margin-top:20px;">

    <tr bgcolor="yellow">

    	<th colspan="2" align="center"><h3><font color="red">DIỆN TÍCH HÌNH CHỮ NHẬT</font></h3></th>

    </tr>

    <tr><td>Chiều dài:</td>

    	<td><input type="text" name="chieudai" value="<?php  echo $chieudai;?> "/></td>

    </tr>

    <tr><td>Chiều rộng:</td>

    	<td><input type="text" name="chieurong" value="<?php  echo $chieurong;?> "/></td>

    </tr>

    <tr><td>Diện tích:</td>

    	<td><input type="text" name="dientich" disabled="disabled" value="<?php  echo $dientich;?> "/></td>

    </tr>

    <tr>

    	<td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>

    </tr>

</table>

</form>
<?php # Script 3.4 - index.php
        $page_title = 'Welcome to this Site!';
        include ('..//includes/footer.html');
        ?>
</body>

</html>