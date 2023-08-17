<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/form-booking.css">
  <title>Booking-form</title>
  <script src="Javascript/form-booking.js"></script>
</head>

<body>
<body>
<div id="navbar-nav">
    <ul class="tops-nav">
    <li><a href=""><img src="images/logo-aston.png" alt="" width="100" height="50"></a></li>
      <li><a type="button" value="Go back!" onclick="history.back()">Back</a></li>   
  
  </ul>
</div>
  <div class="login-entire">
    <div class="log-content">
      <div class="register-info">
        <form id="booking" action="form_booking.php" method="POST">
          <h2 id="tlt-booking"><u>Booking sign up</u></h2>
          <div><?php echo  $duplicate; ?></div>
          <label for="category" class="labels"> Select category events:</label>
          <select name="category" id="category" class="loged" onchange="disableDrop()" required>
            <option disabled selected value>Please select a category</option>
            <option value="sport">Sport</option>
            <option value="culture">culture</option>
            <option value="others">Others</option>
          </select>
          <label for="events" class="labels">Select event:</label>
          <select name="events" id="events" class="loged" required>
            <option disabled selected value>Please select an event</option>
            <option value="football" id="one">Football</option>
            <option value="basketball" id="two">Basketball</option>
            <option value="history" id="three">History</option>
            <option value="Art" id="four">Art</option>
            <option value="Live music" id="five">Live Music</option>
            <option value="Talks" id="six">Talks</option>
          </select>
          <label for="like"> Like √</label>
          <input type="checkbox" name="like">
          <br>

          <label for="describe" class="labels">Describe :</label><br>
          <p class="error-message" id="describe-error"></p>
          <textarea name="describing" id="describe" cols="80" rows="8" onclick="validateDescr()"></textarea>

          <label for="organiser" class="labels">Select the event organiser:</label>
          <input type="text" placeholder="organiser" id="organise" name="organiser" class="loged" select="selected" readonly>

          <label for="location" class="labels">Select the location event:</label>
          <input type="text" placeholder="place" id="place" name="place" class="loged" select="selected" readonly>

          <label for="location" class="labels">Select the date :</label>
          <input type="text" placeholder="date" id="date" name="dates" class="loged" readonly>


          <label for="site" class="labels">Select the URL site:</label>
          <input type="text" placeholder="url" id="url" name="url" class="loged" select="selected" readonly>

          <input type="hidden" name="sending" value="true" />
          <button class="send" id="send_btn" name="Submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>