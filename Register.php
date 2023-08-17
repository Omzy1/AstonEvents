<?php
session_start();
if (isset($_POST['submitted'])){
   // connect to the database
   require_once('php/Connected.php');
     //declaring variables
   $username=isset($_POST['fname'])?$_POST['fname']:false;
   $lastname=isset($_POST['lname'])?$_POST['lname']:false;
   $email=isset($_POST['email'])?$_POST['email']:false;
   $confirmedEmail=isset($_POST['confirmed_email'])?$_POST['confirmed_email']:false;
   $password=isset($_POST['pasw1'])?password_hash($_POST['pasw1'],PASSWORD_DEFAULT):false;
  $_SESSION['Firstname'] = $username;
   if (!($username)){ ?>
   <p> Username wrong!</p>
     <?php exit;
    }
   if (!($password)){
     exit("password wrong!");
     }
  try{
     #register user by inserting the user info 
     $stat=$db->prepare("insert into user values(?,?,?,?,?)");
     $stmt = $db->prepare("SELECT Email FROM user WHERE Email=?");
     $stmt->execute(array($email));
     if ($stmt->rowCount() > 0) {
      //  Email already exists
      $emailExists = "<p style='color:red;'>Email already exists</p>";
     } else {
      $stat->execute(array($username,$lastname,$email,$confirmedEmail, $password));
      $registered = "<p>Congratulations!" . " ". $username . " " . "You are now registered. <a href='login.php'>Login now</a></p>" ; 
     }
  }
  //error message
  catch (PDOexception $ex){ ?>
    <p>Sorry a database error occurred! <br></p>
    <p>Error details: <em><?php $ex->getMessage()?></em></p>
 <?php }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/Homestyle.css">
  <script src="Javascript/ScriptMain.js"></script>
  <script src="Javascript/functionValidations.js"></script>
  <title>Register</title>
</head>

<body>
  <div id="navbar">
    <ul class="top-nav">
    <li><a href=""><img src="images/logo-aston.png" alt="" width="100" height="50" id="aston-img"></a></li>
        <li><a href="Homepage.php">Home</a></li>
        <li><a href="sport.php">Sport</a></li>
        <li><a href="Culture.php">Culture</a></li>
        <li><a href="Other.php">Others</a></li>
        <li><a href="profile-booking.php">Profile</a></li>
        <?php
        //displaying welcome username and displaying the logout button when the user is logged in
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
  <div class="login-entire">
    <div class="log-content">
      <div class="register-info">
        <form id="signin" onsubmit="return signin()"   action="Register.php" method="POST" >
          <img src="images/Aston-Uni-Logo.jpg" width="200" height="100" alt="" class="login-img">
          <h2><u>Register</u></h2>
          <!-- error message displayed in the form -->
          <div
       <?php  if(isset($name_error)):?>
              class ="form_error"
              <?php  endif?>
              >
              <?php if(isset($name_error)): ?>
            <span><?php echo $name_error; ?></span>
            <?php endif ?>
            </div>

            <div
            <?php  if(isset($password_error)):?>
              class ="form_error"
              <?php  endif?>
              >
              <?php if(isset($password_error)): ?>
            <span><?php echo $password_error; ?></span>
            <?php endif ?>
            </div>

            <div>
              <?php 
                echo $emailExists;
               ?>
               <?php 
                echo $registered;
               ?> 
            </div>
          <input type="text" placeholder="First name" name="fname" title="Enter your first name" class="loged"
            onblur="validateFName()">
          <p class="error-msg" id="fname-error"></p>
          <input type="text" placeholder="Last name" name="lname" title="Enter your last name" class="loged"
            onblur="validateLastName()">
          <p class="error-msg" id="lname-error"></p> 
          <input type="email" placeholder="Email" name="email" class="loged" onblur="validateFirstEmail()" value=" <?php echo $email ?>">
          <p class="error-msg" id="email-error"></p>
          <input type="email" placeholder="Confirmed email" name="confirmed_email" class="loged"
            onblur="validateconfirmedEmail()">
          <p class="error-msg" id="confirmed-email-error"></p>
          <input type="password" placeholder="Password" name="pasw1" class="loged" onblur="validationPassword()">
          <p class="error-msg" id="password-error"></p>
          <input type="password" placeholder="Confirmed Password" name="Confirmed_pasw1" class="loged"
            onblur="validateConfirmedPass()">
          <p class="error-msg" id="confirmed-pass-error"></p>
          <input type="hidden" name="submitted" value="true"/>
          <button class="send" id="send_btn" name = "Submit">Sign in</button>
          <div class="signup-link"><a href="login.php">Are you a member? Log in now.</a></div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>