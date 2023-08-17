<?php
// checking if the session is set
session_start();
if (!isset($_SESSION['Username'])) {
  header("Location: login.php");
  exit();
} else {
  $emails = $_SESSION['Username'];
}
//displaying welcome email
?> 
<div class="navigation">

 <h2 style = 'text-align : center; color: #FF4500;'><?php echo  $emails ?> </h2>
 <a href ="Homepage.php" class = "homebutton">Home</a>
 <a href ="booking-form.php" class = "homebutton">Booking</a>

</div>
<h1 id="profile-pg"><u>Your profile</u></h1>
<?php
try {
  //connecting the dstabase 
  require_once('php/Connected.php');
  $quer = "SELECT *  FROM bookingEvents  WHERE  email = ?";
  $row  = $db->prepare($quer);
  $row->execute(array($emails));
//if there is an email then
  if ($row->rowCount() > 0) {
?>

    <!-- table -->
    <table cellspacing="0" cellpadding="5" class='table'>
      <tr>
        <th class='column header'><b>Events & Likes</b></th>
        <th class='column header'><b>Date</b></th>
        <th class='column header'><b>Location</b></th>
      </tr>
  <?php
  //fetch the data
    while ($data = $row->fetch()) {
      $eventName = $data['eventSelected'];
      $eventID = $data['EventsID'];
      ?>
      <!-- display the event name ,date and location information -->
     <tr><td  class = 'column'> <?php echo $eventName ?></td>
     <?php if ($eventName == 'basketball') {?>
         <td class = 'column'> 23/04/2021 </td>
       <td class = 'column'> Ellis Woodcock Sports Centre</td></tr><br>
     <?php }
      if ($eventName == 'football') {?>
        <td class = 'column'> 23/04/2021 </td>
        <td class = 'column'> Ellis Woodcock Sports Centre</td></tr>
     <?php }

      if ($eventName == 'history' || $eventName == 'Art') {?>
          <td class = 'column'> 24/04/2021</td>
         <td class = 'column'> The O2 institute in Birmingham</td></tr>
      <?php }

      if ($eventName == 'Live music' || $eventName == 'Talks') {?>
          <td class = 'column'> 25/04/2021</td>
        <td class = 'column'>Birmingham teathre  city centre</td></tr>
      <?php }
      $query = "SELECT liked  FROM likes  WHERE  email = ? AND eventsName = ?";
      $rows  = $db->prepare($query);
      $rows->execute(array($emails, $eventName));
      while ($info = $rows->fetch()) {
        //   liked basketball
        if ($eventName == 'basketball' && $info['liked'] == 'on') {?>
         <td class = 'column-like'>liked basketball</td>
       <?php } else if ($eventName == 'basketball' && $info['liked'] == NULL) {?>
         <td class = 'column-like'>disliked basketball</td>
       <?php }
        //   liked football
        if ($eventName == 'football' && $info['liked'] == 'on') { ?>
          <td class = 'column-like'>liked football</td>;
        <?php } else if ($eventName == 'football' && $info['liked'] == NULL) { ?>
          <td class = 'column-like'>disliked football</td>
       <?php }
        //   liked hisotry
        if ($eventName == 'history' && $info['liked'] == 'on') { ?>
         <td class = 'column-like'>liked history</td>
       <?php } else if ($eventName == 'history' && $info['liked'] == NULL) {?>
          <td class = 'column-like'>disliked history</td>
       <?php }
        //liked art
        if ($eventName == 'Art' && $info['liked'] == 'on') { ?>
          <td class = 'column-like'>liked art</td>
       <?php } else if ($eventName == 'Art' && $info['liked'] == NULL) {?>
         <td class = 'column-like'>disliked art</td>
        <?php }
        //liked Live music
        if ($eventName == 'Live music' && $info['liked'] == 'on') { ?>
           <td class = 'column-like'>liked live music</td>
        <?php } else if ($eventName == 'Live music' && $info['liked'] == NULL) { ?>
           <td class = 'column-like'>disliked live music</td>
       <?php }
        //liked Talks
        if ($eventName == 'Talks' && $info['liked'] == 'on') { ?>
       <td class = 'column-like'>liked Talks</td>
        <?php } else if ($eventName == 'Talks' && $info['liked'] == NULL) {?>
       <td class = 'column-like'>disliked Talks</td>
       <?php }
      }
    }  
    ?>
    </table>

  <?php } else { ?>
    <img src="images/error.png" alt="" class="img-error">
    <!-- no match found -->
   <h2 class = 'tlt'>Currently there is No booking event  in the list.</h2> 
  <?php  }
} catch (PDOexception $ex) {?>
 <p>Sorry, a database error occurred!</p><br>
 <p>Error details: <em>" <?php $ex->getMessage() ?></p></em>
<?php }

  ?>

  <style>
    /* setting the body */
    * {
      margin: 0;
      padding: 0;
    }
    /* editing the table */
    .table {
      border-collapse: collapse;
      width: 100%;
      display: table;
      table-layout: fixed;
    }
    /* modifying the columns */
    .column {
      text-align: center;
      border: 2px dashed #dddddd;
      padding: 11px 0px;
    }
    /* modifying the header */
    .header {
      font-size: 20px;
      font-weight: bold;
      text-decoration: underline;
      text-align: center;
      font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
      letter-spacing: 2px;
    }
  /* modifying the top navigation area */
    .navigation {
      display: flex;
      align-items: center;
      justify-content: space-around;
      padding: 10px;
      background-color: rgba(0, 0, 0, 0.9);
    }
    /* home button */
    .homebutton {
      text-decoration: none;
      padding: 10px 17px;
      /* border: 5px solid black; */
      background-color: #FF4500;
      color: white;
      cursor: pointer;
      border-radius: 6px;
      font-size: 20px;
    }
    /* hover home button */
    .homebutton:hover {
      background-color: #FF8C00;
      transition: all 0.4s;
    }
    /* like column */
    .column-like {
      text-align: center;
      border: 2px dashed #dddddd;
      padding: 11px 0px;
      color: black;
    }
    /* colour the  columns */
    tr:nth-child(even) {
      background-color: #dddddd;
    }
    .tlt{
      text-align: center;
      align-items: center;
      font-size: 20px; 
      color: 	#FF4500;
    }
    #profile-pg{
font-size: 30px;
font-weight:bold;
font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
color: orange;
text-align: center;
    }
 .img-error{
width: 8%;
display: flex;
margin-left: 46%;
margin-top: 3%;
    }
  </style>