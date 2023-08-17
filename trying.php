<?php
if (isset($_POST['submitted'])) {
  // Sanitize the email, password and check if it is empty
  $email = $_POST['Username'];
  $password = $_POST['Password'];
  //connecting the database
        require('php/Connected.php');
      
try {
        $query = "SELECT Email, pass_word FROM user WHERE Email=?";
        $q = $db->prepare($query);

        // Bind parameters, execute the query
        $q->execute(array($email));

        //    If there is a match in the database
        if ($q->rowCount() > 0) {
            //    Fetch the result and store it in a variable
            $result = $q->fetch();
            // $_SESSION['fname']= $row['FirstName'];

            //    If the passwords match
            if (password_verify($password, $result['pass_word'])) {
                session_start();
                //    Session variable
                $_SESSION['Username'] = $result['Email'];
                header('Location: Homepage.php');
                exit();
            } else {
              //display error message
              $message= "<p style='color:red'>Error ,password does not match </p>";
               
            }
        } else {
            //display error message
        $msguser= "<p style='color:red'>Error ,Username not found </p>";
        }
      } catch (PDOException $e) {
        echo "Database error occured: " .$e->getMessage();
        exit();
      }
       include('login.php');
}

?>