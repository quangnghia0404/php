<html>
	<body>
    <form action="xuly.php" method="GET" >
      Từ khóa : <input type="text" name="txtTukhoa"/>
      <input type="submit" value="Tìm"/>
    </form>
    
    <?php
      $sTukhoa = $_REQUEST["txtTukhoa"];
      if (isset($sTukhoa))
      {
        print "Từ khóa tìm sách là : $sTukhoa";
        echo "<br>Kết quả tìm là : ";
      }
    ?>
	</body>
</html>
