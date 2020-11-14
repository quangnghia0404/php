              
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
    <title>Phân Số</title>
</head>
<body>
<?php
        class PhanSo{
            var $tuSo;
            var $mauSo;

            public function setTuSo($tuSo){
                $this->tuSo = $tuSo;
            }
            public function getTuSo(){
                return $this->tuSo;
            }

            public function setMauSo($mauSo){
                $this->mauSo = $mauSo;
            }
            public function getMauSo(){
                return $this->mauSo;
            }

            public function PhanSo($tuSo,$mauSo){
                $this->tuSo = $tuSo;
                $this->mauSo = $mauSo;
            }

            public function rutGon(){
                $uc = UCLN($this->tuSo, $this->mauSo);
                $this->tuSo = $this->tuSo/$uc;
                $this->mauSo = $this->mauSo/$uc;
            }

            public function hienThi(){
                return "$this->tuSo / $this->mauSo";
            }

            public function Cong($ps) {
                $tu = $this->tuSo * $ps->mauSo + $ps->tuSo * $this->mauSo;
                $mau = $this->mauSo * $ps->mauSo;
                return new PhanSo($tu, $mau);
            }
            
            public function Tru($ps) {
                $tu = $this->tuSo * $ps->mauSo - $ps->tuSo * $this->mauSo;
                $mau = $this->mauSo * $ps->mauSo;
                return new PhanSo($tu, $mau);
            } 

            public function Nhan($ps) {
                return new PhanSo($this->tuSo * $ps->tuSo, $this->mauSo * $ps->mauSo);
            }

            public function Chia($ps) {
                return new PhanSo($this->tuSo * $ps->mauSo, $this->mauSo * $ps->tuSo);
            }
            
        }
        function UCLN($a, $b){
            if($a % $b == 0){
                return $b;
            }
            else {
                return UCLN($b, $a%$b);
            }
        }
    ?>
    <?php
        if(isset($_POST['tuso1']))
            $tuSo1 = $_POST['tuso1'];
        else $tuSo1="";
        if(isset($_POST['mauso1']))
            $mauSo1 = $_POST['mauso1'];
        else $mauSo1="";
        if(isset($_POST['tuso2']))
            $tuSo2 = $_POST['tuso2'];
        else $tuSo2="";
        if(isset($_POST['mauso2']))
            $mauSo2 = $_POST['mauso2'];
        else $mauSo2="";
        if(isset($_POST['ptinh']))
            $ptinh = $_POST['ptinh'];
        else $ptinh="";
    ?>


    <form action="phanso.php" method="POST" style="margin-top: 20px;margin-left: 500px;">
        <h3 style="color:blue">Chọn các phép tính trên phân số</h3>
        <p>Nhập phân số thứ 1: Tử số: <input type="text" name="tuso1" size="10" value="<?php echo $tuSo1; ?>"> Mẫu số: 
        <input type="text" name="mauso1" size="10" value="<?php echo $mauSo1; ?>"></p>
        <p>Nhập phân số thứ 2: Tử số: <input type="text" name="tuso2" size="10" value="<?php echo $tuSo2; ?>"> Mẫu số: 
        <input type="text" name="mauso2" size="10" value="<?php echo $mauSo2; ?>"></p>

        <fieldset style="width: 500px; height: 60px;">
            <legend>Chọn phép tính</legend>
            <label style="color:#FFCC99;">Cộng<input type="radio" name="ptinh" value="+"<?php if($ptinh == "+") echo "checked='checked'"?> /></label>
                <label style="color:#FFCC99;">Trừ<input type="radio" name="ptinh" value="-"<?php if($ptinh == "-") echo "checked='checked'"?> /></label>
                <label style="color:#FFCC99;">Nhân<input type="radio" name="ptinh" value="*"<?php if($ptinh == "*") echo "checked='checked'"?>/></label>
                <label style="color:#FFCC99;">Chia<input type="radio" name="ptinh" value="/"<?php if($ptinh == "/") echo "checked='checked'"?>/></label>
        </fieldset>

        <button style="margin-left: 10px; margin-top: 10px;" type="submit" name="btnKQ" value="">Kết Quả</button>

    </form>

    <?php
        if(isset($_POST['btnKQ'])){
            $ps1 = new PhanSo($tuSo1, $mauSo1);
            $ps2 = new PhanSo($tuSo2, $mauSo2);

            switch ($ptinh) {
                case '+':
                    $kq = $ps1->Cong($ps2);
                    break;
    
                case '-':
                    $kq = $ps1->Tru($ps2);
                    break;
                  
                case '*':
                    $kq = $ps1->Nhan($ps2);
                    break;
                  
                case '/':
                    $kq = $ps1->Chia($ps2);
                    break;
                
                default:
                    break;
            }
            $kq->rutGon();
            echo"<p style='color:red;text-align: center'>Phép tính là: " . $ps1->hienThi() . " $ptinh "  . $ps2->hienThi() . " = " . $kq->hienThi();
            echo"</p";
        }
    ?>
       
    <?php # Script 3.4 - index.php
        $page_title = 'Welcome to this Site!';
        include ('..//includes/footer.html');
        ?>   
</body>
</html>