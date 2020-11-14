<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Tập</title>
</head>
<body>
<?php
    
    if (isset($_POST["hoten"]) && isset($_POST["email"])&& isset($_POST["age"]) &&isset($_POST["gt"]) &&isset($_POST["cmt"]))
    {
        $hoten = $_POST["hoten"];
        $email = $_POST["email"];
        $gt = $_POST["gt"];
        $age = $_POST["age"];
        $cmt = $_POST["cmt"];
    }
    else
    {
        $hoten ="";
        $email ="";
        $gt ="";
        $age ="";
        $cmt ="";
    } 
    
    ?>
<form  action="" method="POST" id="myForm">

<table style="border: 1px solid black; background-color: #FFCCCC;" align='center'>

    <tr bgcolor="yellow">

        <th colspan="2" align="center">
            <h3>
                <font color="red">Enter your information</font>
            </h3>
        </th>

    </tr>

    <tr>
        <td>Họ tên:</td>

        <td style="float: left;"><input type="text" name="hoten" size="30" value="" /></td>

    </tr>

    <tr>
        <td>Email address:</td>

        <td style="float: left;"><input type="email" name="email" size="55" value=" " /></td>

    </tr>


    <tr>
        <td>Gender:</td>

        <td style="float: left;"><input type="radio" name="gt" value="Male">Male
            <input type="radio" name="gt" value="Female">Female</td>

    </tr>


    <tr>
        <td>Age:</td>

        <td style="float: left;"><select name="age"> <option value="Between 30 abd 60">Between 30 abd 60</option>
        <option value="Between 40 abd 50">Between 40 abd 50</option>
        <option value="Between 10 abd 40">Between 10 abd 40</option>
    </select></td>

    </tr>


    <tr>
        <td>Comments:</td>

        <td><textarea name="cmt" rows="5" cols="50">Good</textarea></td>

    </tr>


</table>
<button name="gui" type="submit" style="margin-top: 20px;margin-left: 512px;">submit My Information</button>

<table width="400" border ="0" align ="center" bgcolor="#CCFFFF">
            <tr>
                <td><?php echo "Name: ". $hoten; ?></td>

                
            </tr>
            <tr>
            <td><?php echo "Email: ".$email; ?></td>
            </tr>
            <tr>
            <td><?php echo "Giới tính: ".$gt; ?></td>
            </tr>
            <tr>
            <td><?php echo "Age: ".$age; ?></td>
            </tr>
            <tr>
            <td><?php echo "Comments: ".$cmt; ?></td>
            </tr>
           
        </table>

</form>
</body>
</html>