<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="./includes/b.css">
    <title>Đăng Nhập</title>

</head>
<body>
<?php 
         session_start();
		if( isset($_SESSION["user"])){
            echo $_SESSION["user"];
            session_unset();
         
        }
    ?>
       
	    <form action='login_submit.php' method='POST'>
        <div class="container">
		<header>Đăng Nhập</header>
		<form>
			<div class="input-field">
				<input type="text" required name='username'>
				<label>Username</label>
			</div>
			<div class="input-field">
				<input class="pswrd" type="password" required name='password' >
				<label>Password</label>
			</div>
			<div class="button">
				<div class="inner">
				</div>
				<button type="submit" name="submit">ĐĂNG NHẬP</button>
			</div>
		</form>
		<div class="auth">
		Hoặc đăng nhập với</div>
		<div class="links">
			<div class="facebook">
				<i class="fab fa-facebook-square"><span>Facebook</span></i>
			</div>
			<div class="google">
				<i class="fab fa-google-plus-square"><span>Google</span></i>
			</div>
		</div>
		<div class="signup">
			Chưa có tài khoản? <a href="register.php">Đăng ký ngay</a>
		</div>
    </div>
    </form>


</body>
</html>