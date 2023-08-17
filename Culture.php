<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"=1.0,maximum-scale=1.0”>
    <title>Culture</title>
</head>
<link rel="stylesheet" href="CSS/Homestyle.css">

<body>
    <div id="navbar">
        <ul class="top-nav">
            <li><a href=""><img src="images/logo-aston.png" alt="" width="100" height="50"></a></li>
            <li><a href="Homepage.php">Home</a></li>
            <li><a href="sport.php">Sport</a></li>
            <li><a href="">Culture</a></li>
            <li><a href="Other.php">Others</a></li>
            <li><a href="profile-booking.php">Profile</a></li>
            <?php
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

    <h1 id="tlt-Spage">Culture</h1>
    <div class="entire">
        <div class="info-left">
            <h2 id="sport-tlt">About Culture</h2>
            <p id="sport-descrp">Culture is the main patterns of learned and biekefs and shared bahaviours of a
                particulae group of people ,ethnic and social.
                According to anthropologists there are over 3814 distinctcultures around the world .
                Each culture have differents beliefs ,lifestyle, tradiotion and history.Culture is what make us distinct
                from different nations and it is also what make us unique from each others.
            </p>
            <img src="images/art1.png" alt="" class="fit-sport">
            <img src="images/History.png" alt="" class="fit-sport">
            <img src="images/tickets.png" alt="" class="fit-sport">
        </div>
        <div class="info-left">
            <img src="images/World-PNG-Clipart.png" alt="" class="about-img">
            <!-- <div class="sport-container"> -->
        </div>
    </div>
    <div class="container">
        <div class="container-content">
            <img src="images/pyramid.png" alt="" id="img-history">
        </div>
        <div class="container-content">
            <h2 id="football-tlt">History</h2>
            <p id="descrp-football">Before even thinking about exploring the history of humanity you need to understand
                what is history.
                History is the study of the past in particular the people ,the siocieties and events and mistakes of the
                past.
                It is really important to understand the history in order to not make the same mistakes again
                and at the same time it is important to understand the crucial events that changed our lifes forever.
                Scroll down and book the history event if you are interesting in learning more about history .
            </p>
            <img src="images/nasa.png" alt="" class="cup-football">
            <img src="images/julius-caesar.png" alt="" class="cup-football">
            <img src="images/Mansa-musa.jpg" alt="" class="cup-football">
            <img src="images/Nikola-tesla.png" alt="" class="cup-football">



        </div>
    </div>

    <h2 id="event-Footbtlt">History event detail..</h2>
    <div class="row-football">
        <div class="column-football">
            <div class="card">
                <img src="images/activites.jpg" alt="" class="football-event">
                <div class="container-football">
                    <h2> History Event</h2>
                    <p class="title_football">24/04/2021 at 2PM</p>
                    <p>The venue is going to be in Birmingham City Centre at Aston university in the history department
                        .</p>
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
                <img src="images/secretaly.jpg" alt="" class="football-event">
                <div class="container-football">
                    <h2> Organiser</h2>
                    <p class="title_football">Yasmine Larson</p>
                    Hi i'm the secretery of the event and I will be glad to answer all your enquires on my email below.
                    </p>

                    <p>YasmineLarson@Aston.ac.uk</p>
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
                <img src="images/Teacher.jpg" alt="" class="football-event">
                <div class="container-football">
                    <h2>History teacher</h2>
                    <p class="title_football">Chloe Heard</p>
                    <p>I will be the main histroy teacher in the event and I will try to help as many as possible
                        to understand with some history facts and events.</p>
                    <p>ChloeHeard@Aston.ac.uk</p>
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
            <h2 id="basketball-tlt">Art</h2>
            <strong>
                <p id="basketball-descrp">
                    Art is being describe by mamy philosophers as a vehicle for the expression or communication of
                    emotions and ideas.
                    Art is being the oldest form of documentation of the human kind which are mainly visual arts.
                    Artist are not always aiming the beauty of the art but they are mainly aiming the connection between
                    human emotion to the art.
                    Art allow you express your emotion ,culture and uniqueness of individual.
                    Scroll down below to learn more about art and book the event if you intersted.
                </p>
            </strong>
            <img src="images/Asian-art.png" alt="" class="basket-cup">
            <img src="images/nativeAmerican.png" alt="" class="basket-cup">
            <img src="images/mona-lisa.png" alt="" class="basket-cup">
            <img src="images/African-art.png" alt="" class="basket-cup">
        </div>
        <div class="basketball-content">
            <img src="images/colosseo.png" alt="" class="art-img">
        </div>
    </div>

    <h2 id="event-Footbtlt">Art event detail..</h2>
    <div class="row-football">
        <div class="column-football">
            <div class="card">
                <img src="images/Art-img.jpg" alt="" class="football-event">
                <div class="container-football">
                    <h2> Art Event</h2>
                    <p class="title_football">24/04/2021 at 3PM</p>
                    <p>The venue is going to be in Birmingham at Aston university main building .</p>
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
                <img src="images/secretaly.jpg" alt="" class="football-event">
                <div class="container-football">
                    <h2> Organiser</h2>
                    <p class="title_football">Yasmine Larson</p>
                    Hi i'm the secretery of the event and I will be glad to answer all your enquires on my email below.
                    </p>

                    <p>YasminaLarson@Aston.ac.uk</p>
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