<?php
session_start();
include "db_conn.php";
if(isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: index.php?error=Vui lòng nhập tài khoản !");
        exit();
    }elseif(empty($pass)){
        header("Location: index.php?error=Vui lòng nhập mật khẩu !");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['fullname'] = $row['fullname'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error=Sai tài khoản hoặc mật khẩu !");
		        exit();
			}
		}else{
			header("Location: index.php?error=Sai tài khoản hoặc mật khẩu !");
	        exit();
		}
    }


}else{
    header("Location: index.php");
    exit();
}
