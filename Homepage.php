<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HomePage</title>
</head>
<link rel="stylesheet" href="CSS/Homestyle.css">

<body>
  <div class="image">
    <div id="navbar">
      <ul class="top-nav">
        <li><a href=""><img src="images/logo-aston.png" alt="" width="100" height="50"></a></li>
        <li><a href="#">Home</a></li>
        <li><a href="sport.php">Sport</a></li>
        <li><a href="Culture.php">Culture</a></li>
        <li><a href="Other.php">Others</a></li>
        <li><a href="profile-booking.php">Profile</a></li>
        <?php
        //displaying the welcome username and the log out button when the user is logged in
        session_start();
        if (isset($_SESSION['Username'])) {
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

    <h1 id="home-title">Welcome to Aston Events</h1>
    <div class="button-container">
      <?php
      //displaying log out when user is logged in
      session_start();
      if (isset($_SESSION['Username'])) {?>
      <a href="lgout.php" id="button2" class="login-home">Log out</a>
      <?php  } else {?>
      <a href="login.php"class="login-home">Login</a>
     <?php }
      ?>
    </div>
  </div>
</body>

</html>