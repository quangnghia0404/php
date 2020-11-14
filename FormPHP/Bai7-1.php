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
    <title>Trang cá nhân</title>
</head>

<body>

    <form align='center' action="Bai7.php" method="post" id="myForm">

        <table style="border: 1px solid black;margin-top: 20px ;background-color: #FFCCCC;" align='center'>

            <tr bgcolor="yellow">

                <th colspan="2" align="center">
                    <h3>
                        <font color="red">Enter your information</font>
                    </h3>
                </th>

            </tr>

            <tr>
                <td>Họ tên:</td>

                <td style="float: left;"><input type="text" name="hoten" size="55" value="" /></td>

            </tr>

            <tr>
                <td>Địa chỉ:</td>

                <td style="float: left;"><input type="text" name="diachi" size="55" value=" " /></td>

            </tr>

            <tr>
                <td>Số điện thoại:</td>

                <td style="float: left;"><input type="text" name="sdt" size="30" value="" /></td>

            </tr>

            <tr>
                <td>Giới tính:</td>

                <td style="float: left;"><input type="radio" name="gt" value="Nam">Nam
                    <input type="radio" name="gt" value="Nữ">Nữ</td>

            </tr>


            <tr>
                <td>Quốc tịch:</td>

                <td style="float: left;"><select name="quoctich"> <option value="Việt Nam">Việt Nam</option>
                <option value="Mỹ">Mỹ</option>
                <option value="Nhật Bản">Nhật Bản</option>
            </select></td>

            </tr>

            <tr>
                <td>Các môn đã học:</td>

                <td style="float: left;"><input type="checkbox" name="mh1" value="PHP & MYSQL">PHP & MYSQL
                    <input type="checkbox" name="mh2" value="C">C#
                    <input type="checkbox" name="mh3" value="XML">XML
                    <input type="checkbox" name="mh4" value="Python">Python</td>

            </tr>

            <tr>
                <td>Ghi chú:</td>

                <td><textarea name="cmt" rows="5" cols="50"></textarea></td>

            </tr>


            <tr>

                <td colspan="2" align="left" style="padding-left: 100px;"><input type="submit" value="Gửi" name="tinh" />
                    <input type="button" onclick="myFunction()" value="Hủy"> </td>


            </tr>

        </table>

    </form>

    <script>
        function myFunction() {
            document.getElementById("myForm").reset();
        }
    </script>


<?php # Script 3.4 - index.php
        $page_title = 'Welcome to this Site!';
        include ('..//includes/footer.html');
        ?>
</body>

</html>