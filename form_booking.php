
<?php 
session_start();
$email = $_SESSION['Username'];
//  $like = $_POST['like'];
if (isset($_POST['sending'])) {

    $like = $_POST['like'];
    $date = $_POST['dates'];
    $organiser = $_POST['organiser'];
    $url = $_POST['url'];
    $category = $_POST['category'];
    $eventsName = $_POST['events'];
    $descrip = $_POST['describing'];
    $place = $_POST['place'];
    $eventSelected = $_POST['events'];

    try {
        require_once('php/Connected.php');

        $sq1 = "INSERT INTO events VALUES(default ,?,?,?,?,?,?,?)";
        $statemt1 = $db->prepare($sq1);
        $sq2 = "INSERT INTO likes VALUES(?, ?, ?,?)";
        $statemt2 = $db->prepare($sq2);
        $validate = "SELECT * FROM bookingEvents WHERE email=? AND eventSelected=?";
        $validation = $db->prepare($validate);
        $validation->execute(array($email, $eventsName));
        if ($validation->rowCount() > 0) {
            $duplicate = "<p style = 'color: red; text-align : center; '>**Duplicate booking**</p>";
            include('booking-form.php');
            exit();
        } else {
            $sq3 = "INSERT INTO bookingEvents VALUES(?, ? , ?)";
            $statemt3 = $db->prepare($sq3);
            if ($statemt1->execute(array($eventsName, $date, $descrip, $category, $url, $organiser, $place))) {
                $eventsID = $db->lastInsertId();
                if ($statemt2->execute(array($like, $eventsID, $email, $eventsName))) {
                    if ($statemt3->execute(array($eventsID, $email, $eventSelected))) {
                        header("Location: profile-booking.php");
                    } else {
                        header("Location: booking-form.php");
                    }
                } else {
                    header("Location: booking-form.php");
                }
            } else {
                header("Location: booking-form.php");
            }
        }
    } catch (PDOException $e) {
        echo "Database error occured: " . $e->getMessage();

        exit();
    }
}
?>
