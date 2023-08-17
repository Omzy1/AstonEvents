<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/Booking.css">
  <title>Booking</title>
</head>

<body>
  <div id="navbar-booking">
    <ul class="top-nav">
      <li><a href=""><img src="images/logo-aston.png" alt="" width="100" height="50"></a></li>
      <li><a type="button" value="Go back!" onclick="history.back()">Back</a></li>
    </ul>
  </div>

  <h2 id="booking-title">Booking events</h2>
  <div id="myBtnContainer">
    <button class="btn active" onclick="showAll()"> Show all</button>
    <button class="btn" onclick="showDate()"> Sort by date</button>
    <button class="btn" onclick="showSport()"> Sports</button>
    <button class="btn" onclick="showCulture()"> Culture</button>
    <button class="btn" onclick="showOthers()"> Others</button>

  </div>
  <div class="main-container">
    <div class="container">
      <div class="cards" id="football-card">
        <img src="images/football-choice.jpg" alt="" class="booking-img">
        <div class="container-con">
          <h2> Football tournament</h2>
          <p class="title_event">23/04/2021 at 3PM</p>
          <p>The venue is going to be in Birmingham at Sir Doug Ellis Woodcock Sports Centre.</p>
          <p>EmilyDayna@Aston.ac.uk</p>
          <a href="booking-form.php"><button class="booking-btn">Book</button></a>
        </div>
      </div>

      <div class="cards" id="basketball-card">
        <img src="images/basketball-court.jpg" alt="" class="booking-img">
        <div class="container-con">
          <h2> Basketball tournament </h2>
          <p class="title_event">23/04/2021 at 1PM</p>
          <p>The venue is going to be in Birmingham at Sir Doug Ellis Woodcock Sports Centre.</p>
          <p>EmilyDayna@Aston.ac.uk</p>
          <a href="booking-form.php"><button class="booking-btn">Book</button></a>
        </div>
      </div>

    </div>
    <div class="container">
      <div class="cards" id="History_card">
        <img src="images/activites.jpg" alt="" class="booking-img">
        <div class="container-con">
          <h2>History event</h2>
          <p class="title_event">24/04/2021 at 2PM</p>
          <p>The venue is going to be in Birmingham City Centre at Aston university in the history/art department.</p>
          <p>YasminaLarson@Aston.ac.uk</p>
          <a href="booking-form.php"><button class="booking-btn">Book</button></a>
        </div>
      </div>

      <div class="cards" id="art_card">
        <img src="images/art-choice.jpg" alt="" class="booking-img">
        <div class="container-con">
          <h2>Art event</h2>
          <p class="title_event">24/04/2021 at 3PM</p>
          <p>The venue is going to be in Birmingham city centre at Aston university in the art gallery room.</p>
          <p>YasminaLarson@Aston.ac.uk</p>
          <a href="booking-form.php"><button class="booking-btn">Book</button></a>
        </div>
      </div>

    </div>
  </div>
  <div class="container">

    <div class="cards" id="music_card">
      <img src="images/parkconcert.jpg" alt="" class="booking-img">
      <div class="container-con">
        <h2>Live Music Concert</h2>
        <p class="title_event">25/04/2021 at 5PM</p>
        <p>The venue is going to be in Birmingham City Centre at the famous O2 institute.</p>
        <p>LauraLao@Aston.ac.uk</p>
        <a href="booking-form.php"><button class="booking-btn">Book</button></a>
      </div>
    </div>
    <div class="cards" id="talks_card">
      <img src="images/Talk-event.jpg"" alt="" class=" booking-img">
      <div class="container-con">
        <h2>Talks event</h2>
        <p class="title_event">25/04/2021 at 2PM</p>
        <p>The venue is going to be in Birmingham city centre at Aston university in the debate room.</p>
        <p>LauraLao@Aston.ac.uk</p>
        <a href="booking-form.php"><button class="booking-btn">Book</button></a>
      </div>
    </div>


  </div>
  </div>
  <script src="test.js"></script>

</body>

</html>