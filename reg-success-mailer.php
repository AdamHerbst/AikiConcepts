<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "info@attackplan.net";
    $to = "adamherbstff@gmail.com";
    $subject = "Welcome to Attaxck Plan Day Planner!";
    $message = "Welcome! We hope you enjoy using using this web app! You can put in reminders as well as memories!";
    $headers = "From:" . $from;
    if(mail($to,$subject,$message, $headers)) {
		echo "The email message was sent.";
    } else {
    	echo "The email message was not sent.";
    }
?>