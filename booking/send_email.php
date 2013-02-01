<?php
	$human = $_POST['human'];

	if ($_POST['submit'] && $human == '4') {
		$headers = "From: Primary Photo Education Website\r\n";
		$headers .= "Reply-To: noreply@primaryphoto.net\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    	$from 		= 'From: Primary Photo Education Website'; 
    	$to 		= 'chrisloeper@gmail.com'; 
    	$subject 	= 'Booking Request';

		$first_name = $_POST['first_name'];
		$last_name  = $_POST['last_name'];
		$phone 		= $_POST['phone'];
		$camera 	= $_POST['camera'];
	    $email 		= $_POST['email'];
	    $date 		= $_POST['date'];
	    $time 		= $_POST['time'];
	    $location 	= $_POST['location'];
    	$lesson 	= $_POST['desired_learning'];

		$body = '<table rules="all" style="border-color: #666;" cellpadding="10">';
    	$body .= "<tr><td><strong>From:</strong></td><td>$first_name $last_name</td></tr>";
    	$body .= "<tr><td><strong>Email:</strong></td><td>$email</td></tr>";
    	$body .= "<tr><td><strong>Phone:</strong></td><td>$phone</td></tr>";
		$body .= "<tr><td><strong>Camera:</strong></td><td>$camera</td></tr>";
		$body .= "<tr><td><strong>Date Requested:</strong></td><td>$date</td></tr>";
		$body .= "<tr><td><strong>Time Requested:</strong></td><td>$time</td></tr>";
		$body .= "<tr><td><strong>Desired Location:</strong></td><td>$location</td></tr>";
		$body .= "<tr><td colspan='2'><strong>$first_name $last_name would like to learn about:</td></tr>"
		$body .= "<tr><td colspan='2'>$lesson</td></tr>";

	    if (mail ($to, $subject, $message, $headers)) { 
	        echo '<p>Your booking request has been sent! One of our instructors will contact you within 24 hours.</p>';
	    } else { 
	        echo '<p>Something went wrong, go back and try again!</p>'; 
	    }
	} else if ($_POST['submit'] && $human != '4') {
	    echo '<p>You answered the anti-spam question incorrectly!</p>';
	}
?>