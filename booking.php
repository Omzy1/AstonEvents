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
      <li><a href=""><img src="images/aston-logo.svg" alt="" width="100" height="50"></a></li>
      <li><a type="button" value="Go back!" onclick="history.back()">Back</a></li>
    </ul>
  </div>

  <h2 id="booking-title">Booking events</h2>
  <div id="myBtnContainer">
    <button class="btn active" onclick="filterSelection('all')"> Show all</button>
    <button class="btn" onclick="filterSelection('sports')"> Sports</button>
    <button class="btn" onclick="filterSelection('culture')"> Culture</button>
    <button class="btn" onclick="filterSelection('others')"> Others</button>
  </div>

  <div class="container">
    <div class="filterDiv sports">
      <div class="cards">
        <img src="images/football-choice.jpg" alt="" class="booking-img">
        <div class="container-con">
          <h2> Football tournament</h2>
          <p class="title_event">23/04/2021 at 3PM</p>
          <p>The venue is going to be in Birmingham City Centre on the 3G Gosta Green pitch.</p>
          <p>EmilyDayna@Aston.ac.uk</p>
          <button class="booking-btn">Book</button>
        </div>
      </div>
    </div>
    <div class="filterDiv sports">
      <div class="cards">
        <img src="images/basketball-court.jpg" alt="" class="booking-img">
        <div class="container-con">
          <h2> Basketball tournament </h2>
          <p class="title_event">23/04/2021 at 1PM</p>
          <p>The venue is going to be in Birmingham at Sir Doug Ellis Woodcock Sports Centre.</p>
          <p>EmilyDayna@Aston.ac.uk</p>
          <button class="booking-btn">Book</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="filterDiv culture">
      <div class="cards">
        <img src="images/activites.jpg" alt="" class="booking-img">
        <div class="container-con">
          <h2>History event</h2>
          <p class="title_event">24/04/2021 at 2PM</p>
          <p>The venue is going to be in Birmingham City Centre at Aston university in the history department.</p>
          <p>YasminaLarson@Aston.ac.uk</p>
          <button class="booking-btn">Book</button>
        </div>
      </div>
    </div>
    <div class="filterDiv culture">
      <div class="cards">
        <img src="images/art-choice.jpg" alt="" class="booking-img">
        <div class="container-con">
          <h2>Art event</h2>
          <p class="title_event">24/04/2021 at 3PM</p>
          <p>The venue is going to be in Birmingham city centre at Aston university in the art gallery room.</p>
          <p>YasminaLarson@Aston.ac.uk</p>
          <button class="booking-btn">Book</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="filterDiv  others">
      <div class="cards">
        <img src="images/parkconcert.jpg" alt="" class="booking-img">
        <div class="container-con">
          <h2>Live Music Concert</h2>
          <p class="title_event">25/04/2021 at 5PM</p>
          <p>The venue is going to be in Birmingham City Centre at the famous O2 institute.</p>
          <p>LauraLao@Aston.ac.uk</p>
          <button class="booking-btn">Book</button>
        </div>
      </div>
    </div>

    <div class="filterDiv others">
      <div class="cards">
        <img src="images/Talk-event.jpg"" alt="" class=" booking-img">
        <div class="container-con">
          <h2>Talks event</h2>
          <p class="title_event">25/04/2021 at 2PM</p>
          <p>The venue is going to be in Birmingham city centre at Aston university in the debate room.</p>
          <p>LauraLao@Aston.ac.uk</p>
          <button class="booking-btn">Book</button>
        </div>
      </div>
    </div>

  </div>
  <script src="test.js"></script>

</body>

</html>