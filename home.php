<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h2>Hello, <?php echo $_SESSION['fullname']; ?></h2>
     <a href="logout.php">Logout</a>
     <div class="top">
     </div>
          
</body>
<style>
    h2{
          text-align: center;
          color: #fff;
     }
     //*.top{
          width: 81%;
          height: 100%;
          border: 3px;
     }*//
</style>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
