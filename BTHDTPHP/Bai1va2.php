

        
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
    <title>Quản lý nhân viên</title>
    <style>
        td{
            background-color: #FFFFCC;
        }
    </style>
</head>
<body>
    <?php
        abstract class NhanVien{
            //khai bao cac thuoc tinh
            var $hoTen;
            var $gioiTinh;
            var $ngaySinh;
            var $ngayVaoLam;
            var $heSoLuong;
            var $soCon;
            var $soNamLamViec;
            var $luongCB = 500000;

            //lay va gan gia tri cho cac thuoc tinh class
            public function setHoTen($hoTen){
                $this->hoTen = $hoTen;
            }
            public function getHoTen(){
                return $this->hoTen;
            }

            public function setGioiTinh($gioiTinh){
                $this->gioiTinh = $gioiTinh;
            }
            public function getGioiTinh(){
                return $this->gioiTinh;
            }

            public function setNgaySinh($ngaySinh){
                $this->ngaySinh = $ngaySinh;
            }
            public function getNgaySinh(){
                return $this->ngaySinh;
            }

            public function setNgayVaoLam($ngayVaoLam){
                $this->ngayVaoLam = $ngayVaoLam;
            }
            public function getNgayVaoLam(){
                return $this->ngayVaoLam;
            }

            public function setHeSoLuong($heSoLuong){
                $this->heSoLuong = $heSoLuong;
            }
            public function getHeSoLuong(){
                return $this->heSoLuong;
            }

            public function setSoCon($soCon){
                $this->soCon = $soCon;
            }
            public function getSoCon(){
                return $this->soCon;
            }

            public function setSoNamLamViec($soNamLamViec){
                $this->soNamLamViec = $soNamLamViec;
            }
            public function getSoNamLamViec(){
                return $this->soNamLamViec;
            }

            public function tienThuong(){
                return $this->soNamLamViec * 1000000;
            }
            //ham khoi tao thong tin chung
            
            abstract public function troCap();
            abstract public function tienLuong();
        }
        //class nhan vien van phong
        class NhanVienVP extends NhanVien{
            //khai bao cac thuoc tinh cua class
            var $soNgayVang;
            var $dinhMucVang = 2;
            var $donGiaPhat = 25000;
            //get set
            public function setSoNgayVang($soNgayVang){
                $this->soNgayVang = $soNgayVang;
            }
            public function getSoNgayVang(){
                return $this->soNgayVang;
            }

            public function setDinhMucVang($dinhMucVang){
                $this->dinhMucVang = $dinhMucVang;
            }
            public function getDinhMucVang(){
                return $this->dinhMucVang;
            }

            public function setDonGiaPhat($donGiaPhat){
                $this->donGiaPhat = $donGiaPhat;
            }
            public function getDonGiaPhat(){
                return $this->donGiaPhat;
            }
            //xay dung ham chung va rieng cua class nay
            function tienPhat(){
                if($this->soNgayVang > $this->dinhMucVang){
                    return ($this->soNgayVang - $this->dinhMucVang) * $this->donGiaPhat;
                }
                else {
                    return 0;
                }
            }

            function troCap(){
                if($this->gioiTinh == '0'){
                    return $this->soCon * 200000 * 1.5;
                }
                else {
                    return $this->soCon * 200000;
                }
            }

            function tienLuong(){
                return ($this->luongCB * $this->heSoLuong) - $this->tienPhat();
            }
        }

        //class nhan vien san xuat
        class NhanVienSX extends NhanVien{
            var $soSanPham;
            var $dinhMucSP = 100;
            var $donGiaSP = 50000;

            public function setSoSanPham($soSanPham){
                $this->soSanPham = $soSanPham;
            }
            public function getSoSanPham(){
                return $this->soSanPham;
            }

            public function setDinhMucSP($dinhMucSP){
                $this->dinhMucSP = $dinhMucSP;
            }
            public function getDinhMucSP(){
                return $this->dinhMucSP;
            }

            public function setDonGiaSP($donGiaSP){
                $this->donGiaSP = $donGiaSP;
            }
            public function getDonGiaSP(){
                return $this->donGiaSP;
            }

            function tienThuong(){
                if($this->soSanPham > $this->dinhMucSP){
                    return ($this->soSanPham - $this->dinhMucSP) * $this->donGiaSP * 0.03;
                }
                else {
                    return 0;
                }
            }

            function troCap(){
                return $this->soCon * 120000;
            }

            function tienLuong(){
                return ($this->soSanPham * $this->donGiaSP) + $this->tienThuong();
            }
        }
    ?>
    <?php
        if(isset($_POST['hoten']))
            $hoTen =$_POST['hoten'];
        else $hoTen ="";
        if(isset($_POST['ngsinh']))
            $ngaySinh = $_POST['ngsinh'];
        else $ngaySinh ="";
        if(isset($_POST['socon']))
            $soCon = $_POST['socon'];
        else $soCon = "";
        if(isset($_POST['gtinh']))
            $gioiTinh = $_POST['gtinh'];
        else $gioiTinh="";
        if(isset($_POST['ngvaolam']))
            $ngayVaoLam = $_POST['ngvaolam'];
        else $ngayVaoLam="";
        if(isset($_POST['hsluong']))
            $heSoLuong = $_POST['hsluong'];
        else $heSoLuong ="";
        if(isset($_POST['songvang']))
            $soNgayVang = $_POST['songvang'];
        else $soNgayVang="";
        if(isset($_POST['sosanpham']))
            $soSanPham = $_POST['sosanpham'];
        else $soSanPham="";

        
        $tienLuong=0;
        $tienPhat=0;
        $troCap=0;
        $thucLinh=0;
        $tienThuong=0;

        if(isset($_POST['loainv']) && ($_POST['loainv'])=='0'){
            $nv1 = new NhanVienVP();
            $nv1->setHoTen($hoTen);
            $nv1->setNgaySinh($ngaySinh);
            $nv1->setNgayVaoLam($ngayVaoLam);
            $nv1->setSoCon($soCon);
            $nv1->setHeSoLuong($heSoLuong);
            $nv1->setGioiTinh($gioiTinh);
            $nv1->setSoNgayVang($soNgayVang);
            $tienLuong = $nv1->tienLuong();
            $troCap = $nv1->troCap();
            $tienThuong = $nv1->tienThuong();
            $tienPhat = $nv1->tienPhat();
            $thucLinh = $tienLuong + $troCap + $tienThuong - $tienPhat;
        }
        else if(isset($_POST['loainv']) && ($_POST['loainv'])=='1'){
            $nv2 = new NhanVienSX();
            $nv2->setHoTen($hoTen);
            $nv2->setNgaySinh($ngaySinh);
            $nv2->setNgayVaoLam($ngayVaoLam);
            $nv2->setSoCon($soCon);
            $nv2->setGioiTinh($gioiTinh);
            $nv2->setSoSanPham($soSanPham);
            $tienThuong = $nv2->tienThuong();
            $troCap = $nv2->troCap();
            $tienLuong = $nv2->tienLuong();
            $thucLinh = $tienThuong + $troCap + $tienLuong;
        }
        
        $tienLuong = number_format($tienLuong,0,',','.') ."VNĐ";
        $troCap = number_format($troCap,0,',','.') ."VNĐ";
        $tienPhat = number_format($tienPhat,0,',','.') ."VNĐ";
        $tienThuong = number_format($tienThuong,0,',','.') ."VNĐ";
        $thucLinh = number_format($thucLinh,0,',','.') ."VNĐ";
    ?>
    <form action="Bai1va2.php" method="post">
        <table align="center" cellpadding="2" cellspacing="2" style="margin-top: 20px;">
            <tr>
                <th colspan="4" align="center"><h3>QUẢN LÝ NHÂN VIÊN</h3></th>
            </tr>
            <tr>
                <td>Họ và tên:</td>
                <td><input type="text" name="hoten" value="<?php echo $hoTen; ?>" size="40"></td>
                <td>Số con:</td>
                <td><input type="text" name="socon" value="<?php echo $soCon; ?>" size="10"></td>
            </tr>
            <tr>
                <td>Ngày sinh:</td>
                <td><input type="text" name="ngsinh" value="<?php echo $ngaySinh; ?>" size="25"></td>
                <td>Ngày vào làm:</td>
                <td><input type="text" name="ngvaolam" value="<?php echo $ngayVaoLam; ?>" size="25"></td>
            </tr>
            <tr>
                <td>Giới tính:</td>
                <td><input type="radio" name="gtinh" value="1"checked <?php if($gioiTinh == "1") echo "checked='checked'"?> />Nam
                    <input type="radio" name="gtinh" value="0" <?php if($gioiTinh == "0") echo "checked='checked'"?>/>Nữ
                </td>
                <td>Hệ số lương:</td>
                <td><input type="text" name="hsluong" value="<?php echo $heSoLuong; ?>" size="10"></td>
            </tr>
            <tr>
                <td>Loại nhân viên:</td>
                <td><input type="radio" name="loainv" value="0"checked />Văn phòng</td>
                <td colspan="2"><input type="radio" name="loainv" value="1" />Sản xuất</td>
            </tr>
            <tr>
                <td></td>
                <td>Số ngày vắng: <input type="text" name="songvang" value="<?php echo $soNgayVang; ?>" size="10"></td>
                <td colspan="2">Số sản phẩm: <input type="text" name="sosanpham" value="<?php echo $soSanPham; ?>" size="10"></td>
            </tr>
            <tr>
                <td colspan="4" align="center"><input type="submit" name="btnTinh" value="Tính lương"></td>
            </tr>
            <tr>
                <td align="center">Tiền lương:</td>
                <td align="center"><input type="text" name="tienluong" disabled="disabled" value="<?php echo $tienLuong; ?>" size="25"></td>
                <td align="center">Trợ cấp:</td>
                <td><input type="text" name="trocap" value="<?php echo $troCap; ?>" disabled="disabled" size="25"></td>
            </tr>
            <tr>
                <td align="center">Tiền thưởng:</td>
                <td align="center"><input type="text" name="tienthuong" disabled="disabled" value="<?php echo $tienThuong; ?>" size="25"></td>
                <td align="center">Tiền phạt:</td>
                <td><input type="text" name="tienphat" disabled="disabled" value="<?php echo $tienPhat; ?>" size="25"></td>
            </tr>
            <tr>
                <td colspan="4" align="center">Thực lĩnh: <input type="text" name="thuclinh" disabled="disabled" value="<?php echo $thucLinh; ?>" size="30"></td>
            </tr>
        </table>
    </form>

    <?php # Script 3.4 - index.php
        $page_title = 'Welcome to this Site!';
        include ('..//includes/footer.html');
        ?>
</body>
</html>