<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/Homestyle.css">
  <title>Login</title>
</head>
<body>
  <div id="navbar">
    <ul class="top-nav">
    <li><a href=""><img src="images/logo-aston.png" alt="" width="100" height="50"></a></li>
        <li><a href="Homepage.php">Home</a></li>
        <li><a href="sport.php">Sport</a></li>
        <li><a href="Culture.php">Culture</a></li>
        <li><a href="Other.php">Others</a></li>
        <li><a href="profile-booking.php">Profile</a></li>
        <?php
        session_start();
        if (isset($_SESSION['Username'])) {
          // $emaili = $_SESSION['Username'];
          require_once('php/Connected.php');
          $username=$_SESSION['Username'];  
          $query = "SELECT FirstName FROM user WHERE Email = ?";
          $stat = $db->prepare($query);
          $stat->execute(array($username));
          if ($stat->rowCount()>0) {
          $reslt= $stat->fetch();
          $name = $reslt['FirstName'];
          ?>
              <li><a style = 'text-align : center; color: #FF4500;'>Welcome <?php  echo $name  ?></a></li>
     <?php
          }else{?>
          <h5 style = 'text-align : center; color: white;'>WELCOME </h5>
          <?php }?>
          <li><a href="lgout.php" id="button2" class="lgsyst2">Logout</a></li>
       <?php } else {?> 
          <li><a href="login.php" id="button" class="lgin">Login</a></li>
           <li><a href="Register.php" id="button" class="lgin">Register</a></li>
        <?php }
        ?>
      </ul>
    </div>
  <!-- the form -->
  <div class="login-entire">
    <div class="log-content">
      <div class="register-info">
        <!-- <img src="images/Aston-Uni-Logo.jpg" width="200" height="100" alt="" class="login-img"> -->
        <form id="signin" action="trying.php" method="POST"> 
        <h2 id="log-tlt"><u> Login</u></h2>
          <label for="email" class="lbl-login1">Enter Email:</label>
          <input type="email" placeholder="Email" name="Username" class="loged" title="Enter your Aston university email" pattern=".+@aston.ac.uk" required>
          <label for="password" class="lbl-login2">Enter Password:</label>
          <input type="password" placeholder="Password" name="Password" class="loged" required>
          <button type="submit" class="send" name="sent">Sign in</button>
          <input type="hidden" name="submitted" value="true" />
          <div class="signup-link"><a href="Register.php">Dont have an account? Create one now.</a></div>
          <div class="sent-error"><?php echo  $message; ?></div>
          <div class="sent-error"><?php echo $msguser; ?></div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>