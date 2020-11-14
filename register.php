<!DOCTYPE html>
<html>
    <head>
        <title>Đăng ký thành viên</title>
        <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="./includes/b.css">
    </head>
    <body>
       
        <form action='register_submit.php' method='POST'>
        <div class="container">
        <header>Đăng Ký</header>
        <?php 
         session_start();
        if( isset($_SESSION["thongbao"])){
            echo $_SESSION["thongbao"];
            session_unset();
         
        }
    ?>
       
		<form action="register_submit.php" method="post">
          
			<div class="input-field">
				<input type="text" name='username'>
				<label>Username</label>
			</div>
			<div class="input-field">
				<input class="pswrd" type="password"  name='password' >
				<label>Password</label>
            </div>
            <div class="input-field">
				<input class="pswrd" type="password"  name='confirmpassword' >
				<label>Password</label>
            </div>
            <div class="input-field">
				<input type="email" name='email'>
				<label>Email</label>
            </div>
            <div class="input-field">
				<input type="text" name='fullname'>
				<label>FullName</label>
			</div>
			<div class="button">
				<div class="inner">
				</div>
				<button type="submit" name="submit">ĐĂNG KÝ</button>
            </div>
            <div class="signup">
			Đã có có tài khoản? <a href="login.php">Đăng nhập</a>
		</div>
    
		</form>
	
    </div>
    </form>
    </body>
</html>