<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>ĐĂNG NHẬP</h2>
     	<?php if(isset($_GET['error']))  {?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
     	<label>Tài khoản :</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Mật khẩu :</label>
     	<input type="password" name="password" placeholder="*******"><br>

     	<button type="submit">Đăng nhập</button>
     </form>
</body>
</html>