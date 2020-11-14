<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Tim kiem sua</title>
</head>
<body>
<?php 
 $conn = mysqli_connect('localhost', 'root', '', 'qlbansua') or die ('Không thể kết nối tới database'. mysqli_connect_error());

?>
<form action="" method="post">
<table bgcolor="#eeeeee" align="center" width="70%" border="1" cellpadding="5" cellspacing="5" style="border-collapse: collapse;">
<tr>
	<td align="center"><font color="red"><h3>TÌM KIẾM THÔNG TIN SỮA</h3></font></td>
</tr>

<tr>
	<td colspan="2" align="center" >Loại sữa: <select name="loai_sua">
		<?php 
			$query="select * from Loai_sua";
			$result=mysqli_query($conn,$query);
			if(mysqli_num_rows($result)<>0)
			{
				while($row=mysqli_fetch_array($result))
				{
					$ma_loai_sua=$row['Ma_loai_sua'];
					$ten_loai=$row['Ten_loai'];
					echo "<option value='".$ma_loai_sua."' "; 
							if(isset($_POST['loai_sua']) && ($_POST['loai_sua']==$ma_loai_sua)) 
								echo "selected='selected'";
					echo ">".$ten_loai."</option>";
				}
			}
			mysqli_free_result($result);
			// tiep tuc code tuong tu cho Hang_sua
		?>								
        </select>
        Hãng sữa: <select name="hang_sua">
		<?php 
			$query="select * from hang_sua";
			$result=mysqli_query($conn,$query);
			if(mysqli_num_rows($result)<>0)
			{
				while($row=mysqli_fetch_array($result))
				{
					$ma_hang_sua=$row['Ma_hang_sua'];
					$ten_hang_sua=$row['Ten_hang_sua'];
					echo "<option value='".$ma_hang_sua."' "; 
							if(isset($_POST['hang_sua']) && ($_POST['hang_sua']==$ma_hang_sua)) 
								echo "selected='selected'";
					echo ">".$ten_hang_sua."</option>";
				}
			}
			mysqli_free_result($result);
			// tiep tuc code tuong tu cho Hang_sua
		?>								
		</select>
    </td>
</tr>
<tr>
    <td colspan="2" align="center" >
       Tên sữa:  <input type="text " id="tong" size="20" name="dem2" value="">
       <input style="background-color: #FFCC99;"  type="submit"   value="Tìm kiếm " name="" />
     </td>
</tr>

<?php
	mysqli_close($conn);
?>
</body>
</html>