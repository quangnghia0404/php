<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['ten']))
            $ten = $_POST['ten'];
        else $ten = "";
        if(isset($_POST['diaChi']))
            $dchi = $_POST['diaChi'];
        else $dchi = "";
        if(isset($_POST['sex'])){
            if ($_POST['sex'] == 'm') {
                $gTinh = "Nam";
                
            }
            else if ($_POST['sex'] == 'fm') {
                $gTinh = "Nữ";
                
            }
        }

        if(isset($_POST['age']))
            $tuoi = $_POST['age'];

        if(isset($_POST['cmt']))
            $cmt = $_POST['cmt'];
        else $cmt = "";

        
    ?>
    <form action="StickyForm.php" method="POST">
        <fieldset style="width: 500px;">
            <legend>Enter your information in the form below</legend>
            <h3>Name: <input type="text" name="ten" value="<?php echo $ten; ?>"/></h3>
            <h3>Email Address: <input type="text" name="diaChi" value="<?php echo $dchi; ?>"/></h3>
            <h3>Genger: 
                <input type="radio" name="sex" value="m"checked/>Male
                <input type="radio" name="sex" value="fm"/>Female
            </h3>
            <h3>Age:
                <select name="age">
                    <option selected value="Duoi 30">Under 30</option>
                    <option value="30 - 60">Between 30 and 60</option>
                    <option value="Tren 60">Over 60</option>
                </select>
            </h3>
            <h3>Comments:
                <textarea name="cmt" rows="3" cols="50"><?php echo $cmt; ?></textarea>
            </h3>
        </fieldset>
        <input type="submit" name="btnXacNhan" value="Submit My Information"><br>
        
    </form>
    <?php
        if(isset($_POST['btnXacNhan'])){
            echo"<p>Welcome to this page</p>";
            echo"<p>Your information:</p>";
            echo "<p>Name:  $ten</p>";
            echo "<p>Email: $dchi </p>";
            echo "<p>Gender:  $gTinh</p>";
            echo "<p>Age: $tuoi</p>";
            echo "<p>Comments: $cmt</p>";
        }
        else {
            echo "";
        }
    ?>
</body>
</html>