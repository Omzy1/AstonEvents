<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"=1.0,maximum-scale=1.0”>
  <title>Sport</title>
</head>
<link rel="stylesheet" href="CSS/Homestyle.css">
<body>
  <div id="navbar">
    <ul class="top-nav">
    <li><a href=""><img src="images/logo-aston.png" alt="" width="100" height="50"></a></li>
        <li><a href="Homepage.php">Home</a></li>
        <li><a href="">Sport</a></li>
        <li><a href="Culture.php">Culture</a></li>
        <li><a href="Other.php">Others</a></li>
        <li><a href="profile-booking.php">Profile</a></li>
        <?php
        //displaying welcome user and log out when the user is logged in
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
  <h1 id="tlt-Spage">Sports</h1>
  <div class="entire">
    <div class="info-left">
      <h2 id="sport-tlt">About Sport</h2>
      <p id="sport-descrp">Sport is one of the top activities which bring an excellent result for people of any ages.It
        brings many benefits such as
        improving our health which include our physical stamina and blood circulation.
        Sport is by far the best way to be involved in physical activities
        as it keep yourself in good shape.It also improve your communication ,team work and discipline skill.
      </p>
      <img src="images/running-fitness.png" alt="" class="fit-sport">
      <img src="images/fitness-transparent.png" alt="" class="fit-sport">
      <img src="images/Fitness-sport.png" alt="" class="fit-sport">
    </div>
    <div class="info-left">
      <img src="images/Sport-together.png" alt="" class="sport">
      <!-- <div class="sport-container"> -->
    </div>
  </div>
  <div class="container">
    <div class="container-content">
      <img src="images/cristiano-ronaldo-png-17946.png" alt="" id="img-sport">
    </div>
    <div class="container-content">
      <h2 id="football-tlt">Football</h2>
      <p id="descrp-football">Football is the biggest and most followed sport in the world.The aim of football is to
        score to your opponent team
        in a length of 90 minites.Each team consist of 11 players which each player hold a specfic position .
        Players can move the ball with any part of the body expect their hands and arms,only the goalkeeper is allowed
        to use them only in their penalty erea.
        Football hold the biggest tournement in the world every four years where billions of fans around the world
        reunite together
        to watch one of the most anticipate football moments.</p>
      <img src="images/eufalegue.png" alt="" class="cup-football">
      <img src="images/ballon-d-or-balon.png" alt="" class="cup-football">
      <img src="images/championsLegue.png" alt="" class="cup-football">
      <img src="images/Worldcup.png" alt="" class="cup-football">
    </div>
  </div>

  <h2 id="event-Footbtlt">Football event detail..</h2>
  <div class="row-football">
    <div class="column-football">
      <div class="card">
        <img src="images/football_pitch.jpeg" alt=""class="football-event">
        <div class="container-football">
          <h2> Football Event</h2>
          <p class="title_football">23/04/2021 at 3PM</p>
          <p>The venue is going to be in Birmingham at Sir Doug Ellis Woodcock Sports Centre.</p>
          <p>AstonUniversity@Aston.ac.uk</p>
          <?php if (!isset($_SESSION['Username'])) {?>
            <button class="booking-football" id= "booking-btn" onclick="showAlert()">Book</button>
         <?php } else { ?>
            <a href="book.php"><button class="booking-football">Book</button></a>
          <?php }
          ?>

        </div>
      </div>
    </div>

    <div class="column-football">
      <div class="card">
        <img src="images/football-stuff.jpg" alt="" class="football-event">
        <div class="container-football">
          <h2> Organiser</h2>
          <p class="title_football">Emily Dayna</p>
          if you need some enquires contact me at my email below and I will be glad to answer all your questions.
          </p>

          <p>EmilyDayna@Aston.ac.uk</p>
          <!-- displaying error message when the user is not logge in and try to book -->
          <?php if (!isset($_SESSION['Username'])) {?>
            <button class="booking-football" id= "booking-btn" onclick="showAlert()">Book</button>
         <?php } else { ?>
            <a href="book.php"><button class="booking-football">Book</button></a>
          <?php }
          ?>

        </div>
      </div>
    </div>

    <div class="column-football">
      <div class="card">
        <img src="images/football-couch.jpg" alt="" class="football-event">
        <div class="container-football">
          <h2>Referee</h2>
          <p class="title_football">Mark Smith</p>
          <p>I will be the main referee during the football event ,I hope many people that freindly football event that
            are hosting. </p>
          <p>MarkSmith@Aston.ac.uk</p>
           <!-- displaying error message when the user is not logge in and try to book -->
          <?php if (!isset($_SESSION['Username'])) {?>
            <button class="booking-football" id= "booking-btn" onclick="showAlert()">Book</button>
         <?php } else { ?>
            <a href="book.php"><button class="booking-football">Book</button></a>
          <?php }
          ?>

        </div>
      </div>
    </div>
  </div>

  <div class="basketball-container">
    <div class="basketball-content">
      <h2 id="basketball-tlt">Basketball</h2>
      <strong>
        <p id="basketball-descrp">
          Baketball is one of the most popular sport around the world.
          It is a game played by two teams of five players in indoor counrt.
          The aim is to score more points by tossing the ball through the opponent hoop.
          Basketball help you to improve your stamina as alot of movement are made
          such as jumping,running and grabbing a rebound.
          Basketball held the biggest basketball tournement called basketball world cup
          every 4 years.Book for the basketball event if you are interested.
        </p>
      </strong>
      <img src="images/NBA.png" alt="" class="basket-cup">
      <img src="images/pngfind.com-trophy.png" alt="" class="basket-cup">
      <img src="images/NBAtrophy.png" alt="" class="basket-cup">
      <img src="images/T.png" alt="" class="basket-cup">
    </div>
    <div class="basketball-content">
      <img src="images/lebron.png" alt="" class="basketball-img">
    </div>
  </div>

  <h2 id="event-Footbtlt">Basketball event detail..</h2>
  <div class="row-football">
    <div class="column-football">
      <div class="card">
        <img src="images/basketball-court.jpg" alt="" class="football-event">
        <div class="container-football">
          <h2> Basketball Event</h2>
          <p class="title_football">23/04/2021 at 1PM</p>
          <p>The venue is going to be in Birmingham at Sir Doug Ellis Woodcock Sports Centre.</p>
          <p>AstonUniversity@Aston.ac.uk</p>
           <!-- displaying error message when the user is not logge in and try to book -->
          <?php if (!isset($_SESSION['Username'])) {?>
            <button class="booking-football" id= "booking-btn" onclick="showAlert()">Book</button>
         <?php } else { ?>
            <a href="book.php"><button class="booking-football">Book</button></a>
          <?php }
          ?>

        </div>
      </div>
    </div>

    <div class="column-football">
      <div class="card">
        <img src="images/football-stuff.jpg" alt="" class="football-event">
        <div class="container-football">
          <h2> Organiser</h2>
          <p class="title_football">Emily Dayna</p>
          if you need some enquires contact me at my email below and I will be glad to answer all your questions.
          </p>

          <p>EmilyDayna@Aston.ac.uk</p>
           <!-- displaying error message when the user is not logge in and try to book -->
          <?php if (!isset($_SESSION['Username'])) {?>
            <button class="booking-football" id= "booking-btn" onclick="showAlert()">Book</button>
         <?php } else { ?>
            <a href="book.php"><button class="booking-football">Book</button></a>
          <?php }
          ?>

        </div>
      </div>
    </div>
  </div>
  <script src="test.js"></script>
</body>
</html>