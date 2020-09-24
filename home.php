<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="stylemain.css">
</head>
<body>
   
 
     
     <div class="login-wrapper">
          <form action="" class="form2">
          <b><h1>Hello, <?php echo $_SESSION['name']; ?></h1></b>
          <p> How are you feeling today? </p> 
          <input type="submit" value="GOOD" class="good-btn">
          <input type="submit" value="BAD" class="bad-btn">
          <input type="submit" value="VIEW" class="view-btn">

          <a href="logout.php" class="logout">Logout</a>



          </form>
     </div>


     

     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>