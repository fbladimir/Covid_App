<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="stylemain.css">
  <title>Team 6 Project</title>
</head>
<body>
  
  <div class="login-wrapper">
   
    <form action="login.php" class="form" method="post">
      <img src="img/user.png" alt="">
      <h2>PROJECT 6 <br>LOGIN</h2>
      
      <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?> </p> 

      <?php } ?>


      <div class="input-group">
        <input type="text" name="uname" id="User name" required>
        <label for="loginUser">User Name</label>
      </div>
      <div class="input-group">
        <input type="password" name="password" id="password" required>
        <label for="loginPassword">Password</label>
      </div>
      <input type="submit" value="Login" class="submit-btn">
     
     
     
      <a href="#forgot-pw" class="forgot-pw"><b>Learn more <br> about Project 6</b>
      </a>
    </form>

    <div id="forgot-pw">
      <form action="" class="form">
        <a href="#" class="close">&times;</a>
        <h2>Welcome to Project <b>6</b></h2>
        <div class="input-group">

          <h3> During these tough COVID times, keeping track of our health is extremely important. We want
              you to be <u><b>informed</b></u>. In this website, you will be able to find information of others health, limited to family and friends.
              Please take the time to create an account and tell us how you are feeling:) 
      </h3>
          
        </div>
        
      </form>
    </div>
  </div>
</body>
</html>