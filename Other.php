<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"=1.0,maximum-scale=1.0”>
    <title>Other</title>
</head>
<link rel="stylesheet" href="CSS/Homestyle.css">

<body>
    <div id="navbar">
        <ul class="top-nav">
            <li><a href=""><img src="images/logo-aston.png" alt="" width="100" height="50"></a></li>
            <li><a href="Homepage.php">Home</a></li>
            <li><a href="sport.php">Sport</a></li>
            <li><a href="Culture.php">Culture</a></li>
            <li><a href="">Others</a></li>
            <li><a href="profile-booking.php">Profile</a></li>
            <?php
            //displaying welcome user and log out when the user is logged in
            session_start();
            if (isset($_SESSION['Username'])) {
                require_once('php/Connected.php');
                $username = $_SESSION['Username'];
                $query = "SELECT FirstName FROM user WHERE Email = ?";
                $stat = $db->prepare($query);
                $stat->execute(array($username));
                if ($stat->rowCount() > 0) {
                    $reslt = $stat->fetch();
                    $name = $reslt['FirstName'];
            ?>
                    <li><a style='text-align : center; color: #FF4500;'>Welcome <?php echo $name  ?></a></li>
                <?php
                } else { ?>
                    <h5 style='text-align : center; color: white;'>WELCOME </h5>
                <?php } ?>
                <li><a href="lgout.php" id="button2" class="lgsyst2">Logout</a></li>
            <?php } else { ?>
                <li><a href="login.php" id="button" class="lgin">Login</a></li>
                <li><a href="Register.php" id="button" class="lgin">Register</a></li>
            <?php }
            ?>
        </ul>
    </div>
    <h1 id="tlt-Spage">Others</h1>
    <div class="entire">
        <div class="info-left">
            <h2 id="sport-tlt">About Others</h2>
            <p id="sport-descrp">Talks and live music have increase poplularity through the century.
                Talks and live music allow the people expreess themsleves throgh talking and singing.
                Music is one of the oldest form communication by expressing their culture ,ethnic ,characterstics and
                their uniqueness.
                While talks ,recently has being followed by many young people as it is one good way to express their
                opinion.
            </p>
            <img src="images/micrphone.png" alt="" class="fit-sport">
            <img src="images/chat.png" alt="" class="fit-sport">
            <img src="images/lyric.png" alt="" class="fit-sport">
        </div>
        <div class="info-left">
            <img src="images/other-img.png" alt="" class="about-img">
            <!-- <div class="sport-container"> -->
        </div>
    </div>
    <div class="container">
        <div class="container-content">
            <img src="images/michael_jackson.png" alt="" id="img-music">
        </div>
        <div class="container-content">
            <h2 id="football-tlt">Live music</h2>
            <p id="descrp-football">Live music in siple word is a real time concert which the artist usually perform to
                the audiance .
                For many people participating a live music is a fun and memorable way to take a rest from their work and
                school.
                Live music is a huge industry around the world as it is demanded by alot of people .
                Music is often recognised as a breaking barrier between different languages as people can enjoy music
                from different countries and different langauges .
                Music is universal as it can be understood by anyone around the world.
            </p>
            <img src="images/music-note.png" alt="" class="cup-football">
            <img src="images/MusicinWord.png" alt="" class="cup-football">
            <img src="images/musicAward.png" alt="" class="cup-football">
        </div>
    </div>
    <h2 id="event-Footbtlt">Live Music event detail..</h2>
    <div class="row-football">
        <div class="column-football">
            <div class="card">
                <img src="images/parkconcert.jpg" alt="" class="football-event">
                <div class="container-football">
                    <h2> Live Music Event</h2>
                    <p class="title_football">25/04/2021 at 5PM</p>
                    <p>The venue is going to be in Birmingham City Centre at Aston university in the park .</p>
                    <p>AstonUniversity@Aston.ac.uk</p>
                    <!-- displaying error message when the user is not logge in and try to book -->
                    <?php if (!isset($_SESSION['Username'])) { ?>
                        <button class="booking-football" id="booking-btn" onclick="showAlert()">Book</button>
                    <?php } else { ?>
                        <a href="book.php"><button class="booking-football">Book</button></a>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
        <div class="column-football">
            <div class="card">
                <img src="images/music-organiser.jpg" alt="" class="football-event">
                <div class="container-football">
                    <h2> Organiser</h2>
                    <p class="title_football">Laura lao</p>
                    Hi i'm the organiser of the event and I will be glad to answer all your enquires on my email below.
                    </p>

                    <p>LauraLao@Aston.ac.uk</p>
                    <!-- displaying error message when the user is not logge in and try to book -->
                    <?php if (!isset($_SESSION['Username'])) { ?>
                        <button class="booking-football" id="booking-btn" onclick="showAlert()">Book</button>
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
            <h2 id="basketball-tlt">Talks</h2>
            <strong>
                <p id="basketball-descrp">
                    Talks industry have increase drastically in the last decade as podcast and other tv talks have
                    increase the popularity of talks .
                    Talks allow people communiate their opinions about specifics worth topics to the public.
                    It also allow people to share information ,beliefs ,thoughts and ideas to the audiance .
                    More young people are participating into talks as it is a great way to express your opinions to
                    audiance.
                    Scroll down below to learn more about talks and book the event if you intersted.
                </p>
            </strong>
            <img src="images/microphone-m.png" alt="" class="basket-cup">
            <img src="images/groupPeople.png" alt="" class="basket-cup">
            <img src="images/Ted.png" alt="" class="basket-cup">
        </div>
        <div class="basketball-content">
            <img src="images/Talk.png" alt="" class="talk-img">
        </div>
    </div>
    <h2 id="event-Footbtlt">Talks event detail..</h2>
    <div class="row-football">
        <div class="column-football">
            <div class="card">
                <img src="images/Talk-event.jpg" alt="" class="football-event">
                <div class="container-football">
                    <h2> Talks Event</h2>
                    <p class="title_football">25/04/2021 at 2PM</p>
                    <p>The venue is going to be in Birmingham at Aston university main building.</p>
                    <p>AstonUniversity@Aston.ac.uk</p>
                    <!-- displaying error message when the user is not logge in and try to book -->
                    <?php if (!isset($_SESSION['Username'])) { ?>
                        <button class="booking-football" id="booking-btn" onclick="showAlert()">Book</button>
                    <?php } else { ?>
                        <a href="book.php"><button class="booking-football">Book</button></a>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
        <div class="column-football">
            <div class="card">
                <img src="images/music-organiser.jpg" alt="" class="football-event">
                <div class="container-football">
                    <h2> Organiser</h2>
                    <p class="title_football">Laura lao</p>
                    Hi i'm the organiser of the event and I will be glad to answer all your enquires on my email below.
                    </p>
                    <p>LauraLao@Aston.ac.uk</p>
                    <!-- displaying error message when the user is not logge in and try to book -->
                    <?php if (!isset($_SESSION['Username'])) { ?>
                        <button class="booking-football" id="booking-btn" onclick="showAlert()">Book</button>
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