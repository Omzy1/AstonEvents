<?php
//ending the session
	session_start();
	session_unset();
	session_destroy();
	header('Location: login.php');
	exit();
?> 